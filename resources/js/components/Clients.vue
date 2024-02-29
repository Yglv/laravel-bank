<template>
  <Header/>
  <div class="px-4 w-[70%] mr-auto ml-auto sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-4xl mt-8 font-bold leading-6 text-gray-900">Клиенты</h1>
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button
          type="button"
          class="block  bg-balck px-3 mt-8 py-4 text-center text-sm font-semibold text-white bg-purple-800 rounded-lg shadow-sm hover:text-white hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
        >
          <i class="fa-solid fa-plus mr-4"></i>Добавить клиента
        </button>
      </div>
    </div>
    <div class="mt-8 flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto ">
        <div class="inline-block  min-w-full border-2 border-purple-800  rounded-tl-[25px] rounded-tr-[25px]   align-middle ">
          <table class="min-w-full divide-y overflow-hidden rounded-tl-[23px] rounded-tr-[23px]    divide-gray-300 ">
            <thead class="bg-purple-800 ">
              <tr >
                <th
                  scope="col"
                  class="px-3 py-3.5 text-left text-lg front-semibold text-white "
                >
                  Имя
                </th>
                <th
                  scope="col"
                  class="px-3 py-3.5 text-left text-lg font-semibold text-white"
                >
                  Возраст
                </th>
                <th
                  scope="col"
                  class="px-3 py-3.5 text-left text-lg font-semibold text-white"
                >
                  Email
                </th>
                <th
                  scope="col"
                  class="px-3 py-3.5 text-left text-lg font-semibold text-white"
                >
                  Работа
                </th>
                <th scope="col" class="relative  py-3.5  ">
                  <span class="sr-only">Изменить</span>
                </th>
                <th scope="col" class="relative py-3.5  ">
                  <span class="sr-only">Удалить</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white"></tbody>
            <tbody class="bg-white">
              <tr>
                <td
                  class="whitespace-nowrap py-4 pl-2 pr-3 text-lg font-medium text-gray-900 "
                >
                  Najib Ahmed
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-lg text-black">
                  39
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-lg text-black">
                  najibahmed@example.com
                </td>
                <td class="whitespace-nowrap px-3 py-4 text-lg text-black">
                  web developer
                </td>
                <td
                  class="relative whitespace-nowrap py-4  text-right text-sm font-medium sm:pr-0"
                >
                  <a href="#" class="text-white px-3 py-4 text-lg bg-purple-800 rounded-xl hover:bg-green-500"
                    ><i class="fa-solid fa-pencil mr-4"></i>Изменить</a
                  >
                </td>
                <td
                  class="relative whitespace-nowrap py-4  text-right text-sm font-medium sm:pr-0"
                >
                  <a href="#" class="text-white px-3 py-4 mr-3 text-lg bg-purple-800 rounded-xl hover:bg-red-500"
                    ><i class="fa-solid fa-trash mr-4"></i>Удалить</a
                  >
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from "./Header.vue";
</script>
