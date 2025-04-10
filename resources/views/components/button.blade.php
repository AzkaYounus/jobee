
<a {{ $attributes->merge(['class' => 'relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium
  text-gray-800 bg-white border border-gray-300 rounded-lg 
  hover:bg-gray-100 hover:text-gray-900 
  focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-gray-400
  active:bg-gray-200 active:text-gray-900 transition ease-in-out duration-150
  dark:bg-white dark:text-gray-900 dark:border-gray-400 
  dark:hover:bg-gray-100 dark:hover:text-black 
  dark:focus:ring-gray-500 dark:active:bg-gray-200 dark:active:text-black']) }}>
  {{ $slot }}
</a>

