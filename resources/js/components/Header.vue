<template>
<nav class="bg-white border-gray-200">
    <div
      class="max-w-screen-xl flex flex-wrap  items-center justify-between mx-auto p-4"
    >
      <a
        href="/"
        class="flex items-center  space-x-3 rtl:space-x-reverse"
      >
        <img
          src="../assets/logo.jpg"
          class="h-[80px] "
          alt="Flowbite Logo"
        />

      </a>
      <div class="hidden  w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium  flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white"
        >
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-2xl  text-gray-900  rounded  hover:text-purple-400"
              aria-current="page"
            >
              Банк</a
            >
          </li>
          <li>
            <router-link to='/clients'
              href="#"
              class="block py-2 px-3 text-2xl text-gray-900 cursor-pointer rounded hover:text-purple-400 md:hover:bg-transparent md:border-0 "
              >Клиенты</router-link
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-2xl text-gray-900 rounded hover:text-purple-400 md:hover:bg-transparent md:border-0  "
              >Дебеты</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-2xl text-gray-900 rounded hover:text-purple-400 md:hover:bg-transparent md:border-0  "
              >Кредиты</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px- text-2xl text-gray-900 rounded hover:text-purple-400 md:hover:bg-transparent md:border-0"
              >АТМ</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
