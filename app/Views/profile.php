<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <?php if (session()->get('isDataCompleted') == false) : ?>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-red-500 text-white px-4 py-2 border-red-500 rounded-md" role="alert">
                Fill your data first!               
            </div>  
            <?php endif;?>  
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Biographical Data
              </h1>
              <?php if(isset($validation)) : ?>
                    <!-- Show an error here. Find the element in tailwind -->
                    <div class="w-full"> 
                        <div class="bg-red-500 text-white px-4 py-2 border-red-500 rounded-md" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                  <?php endif;?>  
              <form class="space-y-4 md:space-y-6" action="/users" method="POST">
                    <div>
                      <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">first name</label>
                      <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="firstname " <?php if (session()->get('firstname') ) : ?> value="<?= session('firstname') ?>"  <?php endif;?> required="">
                   </div>
                   <div>
                      <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">last name</label>
                      <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="lastname " <?php if (session()->get('lastname') ) : ?> value="<?= session('lastname') ?>"  <?php endif;?>  required="">
                   </div>
                    <div>
                      <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                      <input type="number" name="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Weight in kg(s)" <?php if (session()->get('weight') ) : ?> value="<?= session('weight') ?>"  <?php endif;?> required="">
                   </div>
                   <div>
                      <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">height</label>
                      <input type="number" name="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="height in cm" <?php if (session()->get('height') ) : ?> value="<?= session('height') ?>"  <?php endif;?>  required="">
                   </div>
                   <div>
                      <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">age</label>
                      <input type="number" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="age in year" <?php if (session()->get('age') ) : ?> value="<?= session('age') ?>"  <?php endif;?>  required="">
                   </div>

                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
      
              </form>
          </div>
      </div>
  </div>
</section>