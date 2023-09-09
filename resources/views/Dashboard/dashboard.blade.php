@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
  <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="ml-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
      </path>
    </svg>
  </button>

  <aside id="default-sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
    aria-label="Sidebar">
    <div class="bg-white px-3 py-4">
      <x-logo />
      <ul class="mt-5 space-y-2 font-medium">
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

  <div class="font-radio-canada ml-64 bg-[#F6F6F6] p-6">
    <div class="p-3 text-2xl font-semibold text-[#242A31]">
      <h1>Dashboard</h1>
    </div>
    <div id="balanceInformation" class="flex">
      <div class="ml-[14px] mr-10">
        <x-card-balance cardTitle='Total Balance' amount='$103.120,23' />
      </div>
      <div class="flex w-full flex-col justify-between">
        <div class="flex justify-evenly gap-7">
          <x-action actionName="Create Income" />
          <x-action actionName="Create Expense" />
          <x-action actionName="Add Category" />
        </div>

        <div class="flex justify-evenly gap-7">
          <x-card-total cardName="Total Icome" totalAccount="$20.110,13" />
          <x-card-total cardName="Total Expence" totalAccount="$5.100,03" />
          <x-card-total cardName="Total Profit" totalAccount="$15.010,1" />
        </div>
      </div>
    </div>
    <div id="transationsTable" class="px-4 py-10">
      <div>
        <h1 class="text-2xl font-semibold">All Transactions</h1>
        <x-search />
        <div>
          <x-transaction-table />
        </div>
      </div>
    </div>
  </div>
@endsection
