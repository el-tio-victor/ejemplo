<header class='container-fluid  header'>
    <nav class="container nav p-2 align-items-center  justify-content-between">
        @include('template.partials.navPublic')
        @include('template.partials.navLogin')
    </nav>
    <div class=" d-flex align-items-center 
        justify-content-center header-wrapper">
        {{$slot}}
    </div>
</header>