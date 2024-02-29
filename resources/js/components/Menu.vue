<template>
  <div class="w-full mt-[150px]">
    <div class="w-[1200px] flex justify-between mx-auto my-0">
      <div
        class="flex justify-around    w-[60%] h-[500px] rounded-[15px]"
      >
        <img src="../assets/credit.png" class="h-[180px] w-[180px] self-center ml-4" alt="#" />
        <div class="flex flex-col w-[40%] justify-center">
          <p class="text-5xl  mb-2">Оформить кредит</p>
          <button
            type="button"
            class="flex justify-center text-white items-center bg-purple-700 mr-2 w-[160px] text-center hover:bg-purple-900   font-medium rounded-lg text-sm px-4 py-2 "
          >
            Перейти
          </button>
        </div>
      </div>
      <div class="w-[38%]">
        <div
          class="flex justify-around  mb-[20px] h-[290px] rounded-[15px]"
        >
          <img src="../assets/debet.png" class="h-[120px] w-[120px] self-center ml-4" alt="#" />
          <div class="flex flex-col justify-center w-[40%]">
            <p class="text-4xl">Оформить дебет</p>
            <button
              type="button"
              class="flex justify-center text-white items-center bg-purple-700 mr-2 w-[140px] text-center hover:bg-purple-900   font-medium rounded-lg text-sm px-4 py-2 "
            >
              Перейти
            </button>
          </div>
        </div>
        <div
          class="flex justify-around     h-[190px] rounded-[15px]"
        >
          <img src="../assets/atm.png" class="h-[100px] w-[100px] self-center ml-4" alt="#" />
          <div class="flex flex-col justify-center w-[40%]">
            <p class="text-4xl">АТМ</p>
            <button
              type="button"
              class="flex justify-center text-white items-center bg-purple-700 mr-2 w-[140px] text-center hover:bg-purple-900   font-medium rounded-lg text-sm px-4 py-2"
            >
              Перейти
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
