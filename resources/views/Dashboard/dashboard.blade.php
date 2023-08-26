<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
   <title>Dashboard</title>
</head>

<body>
   <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
   </button>

   <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class=" px-3 py-4  bg-white">
         <x-logo />
         <ul class="space-y-2 font-medium mt-8">
            <x-menuItem title="Dashboard">
               <ion-icon name="grid-outline"></ion-icon>
            </x-menuItem>
            <x-menuItem title="Bank accounts">
               <ion-icon name="card-outline"></ion-icon>
            </x-menuItem>
            <x-menuItem title="Categories">
               <ion-icon name="pricetags-outline"></ion-icon>
            </x-menuItem>
            <x-menuItem title="Expenses">
               <ion-icon name="exit-outline" class="rotate-180"></ion-icon>
            </x-menuItem>
            <x-menuItem title="Incomes">
               <ion-icon name="exit-outline"></ion-icon>
            </x-menuItem>
         </ul>
      </div>
   </aside>
   <div class="p-4 sm:ml-64 bg-[#F6F6F6]">
      <h1 class="text-decoration-color: #000;">Dashboard</h1>

      <div class="max-w-sm p-5 bg-white border border-gray-200 rounded-lg shadow fucsia-400 dark:border-gray-700 whitespace-normal ">
         <p class="text-gray-300">Total Balance </p>
         <h2 class="text-xl font-zinc">103.120,23</h2>
         <hr>
         <p>My accounts</p>
         <svg xmlns="http://www.w3.org/2000/svg" width="670" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M15 8.75002V15.9375C15 16.1427 14.9596 16.3459 14.8811 16.5355C14.8025 16.725 14.6874 16.8973 14.5424 17.0424C14.3973 17.1875 14.225 17.3026 14.0354 17.3811C13.8459 17.4596 13.6427 17.5 13.4375 17.5H4.0625C3.6481 17.5 3.25067 17.3354 2.95765 17.0424C2.66462 16.7493 2.5 16.3519 2.5 15.9375V6.56252C2.5 6.14811 2.66462 5.75069 2.95765 5.45766C3.25067 5.16464 3.6481 5.00002 4.0625 5.00002H10.6047" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.9664 2.08009C17.9093 2.01737 17.8401 1.96688 17.763 1.93166C17.6858 1.89644 17.6023 1.87723 17.5176 1.87518C17.4328 1.87314 17.3485 1.8883 17.2697 1.91976C17.191 1.95122 17.1194 1.99832 17.0594 2.05821L16.5762 2.53907C16.5176 2.59767 16.4847 2.67713 16.4847 2.75997C16.4847 2.84282 16.5176 2.92227 16.5762 2.98087L17.0191 3.42306C17.0482 3.45223 17.0827 3.47538 17.1207 3.49118C17.1587 3.50697 17.1995 3.5151 17.2406 3.5151C17.2818 3.5151 17.3225 3.50697 17.3605 3.49118C17.3985 3.47538 17.4331 3.45223 17.4621 3.42306L17.9332 2.95431C18.1715 2.71642 18.1937 2.32892 17.9664 2.08009ZM15.5992 3.51564L8.54764 10.5547C8.50489 10.5973 8.47381 10.6501 8.45741 10.7082L8.13124 11.6797C8.12342 11.7061 8.12287 11.734 8.12963 11.7607C8.1364 11.7873 8.15023 11.8117 8.16967 11.8311C8.18911 11.8505 8.21344 11.8644 8.24009 11.8711C8.26674 11.8779 8.29472 11.8774 8.32108 11.8695L9.29178 11.5434C9.34985 11.527 9.40272 11.4959 9.4453 11.4531L16.4844 4.40079C16.5495 4.33497 16.586 4.24612 16.586 4.15353C16.586 4.06094 16.5495 3.97208 16.4844 3.90626L16.0957 3.51564C16.0298 3.44992 15.9405 3.41302 15.8474 3.41302C15.7544 3.41302 15.6651 3.44992 15.5992 3.51564Z" fill="black" />
         </svg>
      </div>
   </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>