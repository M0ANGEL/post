@php
    $links = [
      /* ruta menu admin */
      [
         'name'=>'admin',
         'url'=>route('admin.index'),
         'active'=>request()->routeIs('admin.index'),
         'icon'=>'fa-solid fa-lock',
      ],
      /* estado de bodegas */
      [
         'name'=>'Administrar Bodegas',
         'url'=>route('admin.index'),
         'active'=>request()->routeIs('.index'),
         'icon'=>'fa-solid fa-truck',
      ],
      /* nuevos usuarios*/
      [
         'name'=>'Administrar Usuarios',
         'url'=>route('admin.index'),
         'active'=>request()->routeIs('.index'),
         'icon'=>'fa-solid fa-users',
      ],
       /* nuevas bodegas*/
       [
         'name'=>'Crear Bodegas',
         'url'=>route('admin.index'),
         'active'=>request()->routeIs('.index'),
         'icon'=>'fa-solid fa-plus',
      ],
   ];
@endphp


<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">

           {{-- bucles para los link del sidebar, estan en el array --}}
       @foreach ($links as $link)  
       <ul class="space-y-2 font-medium">
            <li>
               <a href="{{$link['url']}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ">
                  <i class="{{$link['icon']}}" ></i>
                  <span class="ms-3">{{$link['name']}}</span>
               </a>
            </li>
       @endforeach
            
      
         </ul>
       
    </div>
 </aside>