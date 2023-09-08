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
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="px-3 py-4 bg-white">
            <x-logo />
            <ul class="space-y-2 font-medium mt-5">
                <x-menu-item title="Dashboard">
                    <ion-icon name="grid-outline"></ion-icon>
                </x-menu-item>
                <x-menu-item title="Bank accounts">
                    <ion-icon name="card-outline"></ion-icon>
                </x-menu-item>
                <x-menu-item title="Categories">
                    <ion-icon name="pricetags-outline"></ion-icon>
                </x-menu-item>
                <x-menu-item title="Expenses">
                    <ion-icon name="exit-outline" class="rotate-180"></ion-icon>
                </x-menu-item>
                <x-menu-item title="Incomes">
                    <ion-icon name="exit-outline"></ion-icon>
                </x-menu-item>
            </ul>
        </div>
    </aside>


    <div class=" font-radio-canada p-6 ml-64 bg-[#F6F6F6] ">
        <div class="text-[#242A31] text-2xl font-semibold p-3">
            <h1>Dashboard</h1>
        </div>
        <div id="balanceInformation" class="flex">
            <div class="mr-10 ml-[14px]">
                <x-card-balance cardTitle='Total Balance' amount='$103.120,23' />
            </div>
            <div class="flex flex-col justify-between">
                <div class="flex gap-7 ">
                    <x-action actionName="Create Income" />
                    <x-action actionName="Create Expense" />
                    <x-action actionName="Add Category" />
                </div>

                <div class="flex gap-7">
                    <x-card-total cardName="Total Icome" totalAccount="$20.110,13" />
                    <x-card-total cardName="Total Expence" totalAccount="$5.100,03" />
                    <x-card-total cardName="Total Profit" totalAccount="$15.010,1" />
                </div>
            </div>
        </div>
        <div id="transationsTable" class="py-10 px-4">
            <div>
                <h1 class="text-2xl font-semibold">All Transactions</h1>
                <x-search />
                <div>
                    <x-transaction-table />
                </div>
            </div>
        </div>


    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>