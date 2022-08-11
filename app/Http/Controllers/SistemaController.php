<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCoupon;
use App\Models\Coupon;
use App\Models\Cupones;
use App\Models\trabajos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class SistemaController extends Controller
{

    public function store(Request $request)
    {
        //Realizamos la validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|min:3',
            'telefono' => 'required|min:6',
            'correo' => 'required|email',
            'estado' => 'required',
            'utm_souce' => 'required|min:3'
        ]);

        //Validamos que el correo no exista en la base de datos
        $client = Client::where('email', $request->correo)->first();
        //Si el cliente existe almacenamos el coupon nuevo que esta descargando a la tabla client_coupon
        if($client){
            //Validamos si el cupon ya existe en la tabla coupon
            $coupon = Coupon::where('coupon', $request->cupon)->first();
            if ($coupon) {
                //Si existe el cupon en la base de datos solo asignamos el cupon al cliente en la tabla client_coupon
                ClientCoupon::create([
                    'coupon_id' => $coupon->id,
                    'client_id' => $client->id,
                    'state' => $request->estado,
                    'source' => $request->utm_souce
            ]);
            } else {
                //Si no existe el cupon en la base de datos lo creamos y lo asignamos al cliente en la tabla client_coupon
                $coupon = Coupon::create([
                    'coupon' => $request->cupon,
                    'franchise' => $request->marca,
                ]);
                ClientCoupon::create([
                    'coupon_id' => $coupon->id,
                    'client_id' => $client->id,
                    'state' => $request->estado,
                    'source' => $request->utm_souce
            ]);
            }

        //Si no
        }else{
            //Si el cliente no existe almacenamos el cliente nuevo en la tabla client
            $client = Client::create([
                'name' => $request->nombre,
                'phone' => $request->telefono,
                'email' => $request->correo,
                'ip_address' => $request->ip()
            ]);
            //Validamos si el cupon ya existe en la tabla coupon
            $coupon = Coupon::where('coupon', $request->cupon)->first();
            if ($coupon) {
                //Si existe el cupon en la base de datos solo asignamos el cupon al cliente en la tabla client_coupon
                ClientCoupon::create([
                    'coupon_id' => $coupon->id,
                    'client_id' => $client->id,
                    'state' => $request->estado,
                    'source' => $request->utm_souce
            ]);
            } else {
                //Si no existe el cupon en la base de datos lo creamos y lo asignamos al cliente en la tabla client_coupon
                $coupon = Coupon::create([
                    'coupon' => $request->cupon,
                    'franchise' => $request->marca,
                ]);
                ClientCoupon::create([
                    'coupon_id' => $coupon->id,
                    'client_id' => $client->id,
                    'state' => $request->estado,
                    'source' => $request->utm_souce
            ]);
            }
        }
        //Retornamos un mensaje de exito con parametros necesarios para mostrar la vista pdf
        $datos_vista = ['nombre' => $request->nombre, 'cupon' => $request->cupon, 'url' => $request->url_cupon];
        return view('pdf')->with(['datos' => $datos_vista]);

        /*  if ($request->cupon == 'none') {
            return redirect()->back()->with('error', 'Nos has seleccionado un cupón, por favor selecciona uno.');
        } else {
            $registro = new Usuarios();
            $registro->nombre = $request->nombre;
            $registro->apellido = '';
            $registro->correo = $request->correo;
            $registro->telefono = $request->telefono;
            $registro->origen = $request->utm_souce;
            $registro->cupon = $request->cupon;
            $registro->campaña = 'Cupones Impresos';
            $registro->save();
 */

            /* CONEXION CRM */
            /* CONEXION API REST PARA ENVIAR DATOS AL CRM (CONTACFT_SYNC). */

            /*   $url = 'https://gruponicxa.api-us1.com';

            $params = array(

                'api_key'      => '104359a3987913e7ae5885d8eced7aca43e27794294aa3b3e10946832915332ae5ab2bdc',
                'api_action'   => 'contact_sync',
                'api_output'   => 'serialize',
            );

            if ($request->marca == 'Pizza Hut') {
                $post_active = array(
                    'first_name' => $request->nombre,
                    'last_name' => '',
                    'email' => $request->correo,
                    'phone' => '+52 ' . $request->telefono,
                    'field[%CAMPAA%,0]' => 'Cupones Impresos',
                    'field[%CUPN_PH%]' => $request->cupon,
                    'field[%MARCA%,0]' => $request->marca,
                    'field[%CANAL%,0]' => 'Landing page',
                    'field[%FUENTE%,0]' => $request->utm_souce,
                    'tags' => $request->cupon . ',' . 'Cupones Impresos' . ',' . $request->marca,
                );
            } elseif ($request->marca == 'KFC') {
                $post_active = array(
                    'first_name' => $request->nombre,
                    'last_name' => '',
                    'email' => $request->correo,
                    'phone' => '+52 ' . $request->telefono,
                    'field[%CAMPAA%,0]' => 'Cupones Impresos',
                    'field[%CUPN_KFC%]' => $request->cupon,
                    'field[%MARCA%,0]' => $request->marca,
                    'field[%CANAL%,0]' => 'Landing page',
                    'field[%FUENTE%,0]' => $request->utm_souce,
                    'tags' => $request->cupon . ',' . 'Cupones Impresos' . ',' . $request->marca,
                );
            } elseif ($request->marca == 'LBB Obregon') {
                $post_active = array(
                    'first_name' => $request->nombre,
                    'last_name' => '',
                    'email' => $request->correo,
                    'phone' => '+52 ' . $request->telefono,
                    'field[%CAMPAA%,0]' => 'Cupones Impresos',
                    'field[%CUPN_LBBO%]' => $request->cupon,
                    'field[%MARCA%,0]' => $request->marca,
                    'field[%CANAL%,0]' => 'Landing page',
                    'field[%FUENTE%,0]' => $request->utm_souce,
                    'tags' => $request->cupon . ',' . 'Cupones Impresos' . ',' . $request->marca,
                );
            } elseif ($request->marca == 'Burger King') {
                $post_active = array(
                    'first_name' => $request->nombre,
                    'last_name' => '',
                    'email' => $request->correo,
                    'phone' => '+52 ' . $request->telefono,
                    'field[%CAMPAA%,0]' => 'Cupones Impresos',
                    'field[%CUPN_LBBO%]' => $request->cupon,
                    'field[%MARCA%,0]' => $request->marca,
                    'field[%CANAL%,0]' => 'Landing page',
                    'field[%FUENTE%,0]' => $request->utm_souce,
                    'tags' => $request->cupon . ',' . 'Cupones Impresos' . ',' . $request->marca,
                );
            }

            // This section takes the input fields and converts them to the proper format
           /*  $query = "";
            foreach ($params as $key => $value) $query .= urlencode($key) . '=' . urlencode($value) . '&';
            $query = rtrim($query, '& '); */

            // This section takes the input data and converts it to the proper format
           /*  $data = "";
            foreach ($post_active as $key => $value) $data .= urlencode($key) . '=' . urlencode($value) . '&';
            $data = rtrim($data, '& '); */

            // clean up the url
           /*  $url = rtrim($url, '/ '); */

            // This sample code uses the CURL library for php to establish a connection,
            // submit your request, and show (print out) the response.
           /*  if (!function_exists('curl_init')) die('CURL not supported. (introduced in PHP 4.0.2)'); */

            // If JSON is used, check if json_decode is present (PHP 5.2.0+)
            /* if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
                die('JSON not supported. (introduced in PHP 5.2.0)');
            }
 */
            // define a final API request - GET
           /*  $api = $url . '/admin/api.php?' . $query;

            $request_ac = curl_init($api); // initiate curl object
            curl_setopt($request_ac, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
            curl_setopt($request_ac, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
            curl_setopt($request_ac, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
            //curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
            curl_setopt($request_ac, CURLOPT_FOLLOWLOCATION, true);

            $response = (string)curl_exec($request_ac);  */// execute curl post and store results in $response

            // additional options may be required depending upon your server configuration
            // you can find documentation on curl options at http://www.php.net/curl_setopt
            //curl_close($request_ac); // close curl object

            //if (!$response) {
                //die('Nothing was returned. Do you have a connection to Email Marketing server?');
            //}

            // This line takes the response and breaks it into an array using:
            // JSON decoder
            //$result = json_decode($response);
            // unserializer
           /*  $result = unserialize($response); */

            /* CONEXION CRM */
            /* CONEXION API REST PARA ENVIAR DATOS AL CRM (CONTACFT_SYNC). */
        //}
    }

    public function rhNicxa(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'telefono' => 'required|min:6',
            'correo' => 'required|email',
            'franquicia' => 'required',
            'vacantes' => 'required',
        ]);

        $registro = new trabajos();
        $registro->nombre = $request->nombre;
        $registro->telefono = $request->telefono;
        $registro->correo = $request->correo;
        $registro->estado = $request->estado;
        $registro->ciudad = $request->ciudad;
        $registro->canal = 'Landing Page';
        $registro->franquicia = $request->franquicia;
        $registro->vacante = $request->vacantes;
        $registro->save();
        return view('gracias');
    }
}
