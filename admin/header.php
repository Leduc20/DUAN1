
<div class="ml-72 justify-end flex">
    <div class=" mt-2 py-3 px-4 mr-2 ">
        <button class="fa fa-bell text-[17px] hover:text-orange-500 font-bold"></button>
    </div>

    <div>
        <div class="rounded-full bg-white mt-2 p-3 mr-3 ">
            <?php foreach($show_user as $user){
                extract($user);
                echo ' '.$image.' ';
            }
            ?>
        </div>
    </div>


    </div>

    
</div>
