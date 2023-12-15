<section class="bg-gray-50 dark:bg-gray-900">
  <h1 class="font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white flex items-center justify-center">Key Insight</h1>
  <div class="flex flex-col items-center justify-center px-5 py-3 mx-auto lg:py-0 my-[20px]">

    <div  class=" my-[20px] flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://doctorjeal.com/wp-content/uploads/2012/03/Body-Mass-Index-BMI-TEST.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Your BMI : <?= round(session()->get('BMI')*100)/100; ?>  </h5>
    </div>
  </div>
  <div class=" my-[20px] flex flex-col items-center justify-center px-5 py-3 mx-auto lg:py-0">
    <div  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Calories Intake : <?= round(session()->get('BMI')*10000)/(100); ?>  cals </h5>
    </div>
  </div>
  <div class=" my-[20px] flex flex-col items-center justify-center px-5 py-3 mx-auto lg:py-0">
    <div  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://images.unsplash.com/photo-1500468756762-a401b6f17b46" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Walk : <?= round(session()->get('BMI')*session()->get('age')*100*5)/(100); ?>  meters </h5>
    </div>
  </div>
  <div class=" my-[20px] flex flex-col items-center justify-center px-5 py-3 mx-auto lg:py-0">
    <div  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://images.unsplash.com/photo-1509411627497-1f19a8db1854" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Push Up : <?= round(session()->get('BMI')*1.5*100)/(100); ?>  times </h5>
    </div>
  </div>
  <div class=" my-[20px] flex flex-col items-center justify-center px-5 py-3 mx-auto lg:py-0">
    <div  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1695008027/attached_image/cara-melakukan-sit-up-yang-benar-dan-variasinya.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daily Sit Up  : <?= round(session()->get('BMI')*0.9*100)/(100); ?>  times </h5>
    </div>
  </div>
  </div>
</section>