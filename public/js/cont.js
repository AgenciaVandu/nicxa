let cont1=document.getElementById('cont1'),
      cont2=document.getElementById('cont2'),
      cont3=document.getElementById('cont3'),
      cont4=document.getElementById('cont4'),
      cont5=document.getElementById('cont5')
  let cant1=0,cant2=0,cant3=0,cant4=0,tiem=25,tiem2=1

  let tiempo1= setInterval(() => {
        cont1.textContent=cant1+=1

        if (cant1===87) {
          clearInterval(tiempo1)
        }

      }, 100 );

  let tiempo2= setInterval(() => {
    cont2.textContent= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(cant2+=4)

        if (cant2===2500) {
          clearInterval(tiempo2)
        }

      }, '${tiem}' );

  let tiempo3= setInterval(() => {
    cont3.textContent=cant3+=1

        if (cant3===30) {
          clearInterval(tiempo3)
        }

      }, 200 );

      
  let tiempo4= setInterval(() => {
    cont4.textContent= new Intl.NumberFormat().format(cant4+=1000)
    /* new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format() */

        if (cant4===1000000) {
          clearInterval(tiempo4)
        }
}, '${tiem2}' );



