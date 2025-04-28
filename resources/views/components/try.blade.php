
 @props(["active" => false , 'type' => 'a' ])

 @if( $type == 'a')

     <a class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600" {{ $attributes }}>

         {{ $slot }}
     </a>
 @else

     <button class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600" >
         {{ $slot }}
     </button>

 @endif


