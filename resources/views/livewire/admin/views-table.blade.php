<div>
    @foreach ($views as $view)
        <div class="flex justify-between p-4">
            <div class="font-bold">
                {{ $view->url }}
            </div>
            <div class="font-bold">
                {{ $view->total }}
            </div>
        </div>
    @endforeach
</div>
