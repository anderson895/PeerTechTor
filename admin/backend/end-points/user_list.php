<?php 

$fetch_all_admin = $db->fetch_all_admin();





if (mysqli_num_rows($fetch_all_admin) > 0): 
    $count=1;
        foreach ($fetch_all_admin as $admin): 
        
            $fullname = $admin['f_name'].' '.$admin['m_name'].''.$admin['l_name'];

        ?>

        <tr class="hover:bg-gray-50">
                        <td class="px-4 sm:px-6 py-4"><?= $count; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?=$fullname?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $admin['email']; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $admin['position']; ?> </td>
                      

    <!-- Message with indentation -->
   
</td>


                        <td class="px-4 sm:px-6 py-4">
                               <button class="delete-admin-btn px-4 py-2 bg-red-500 text-white rounded" data-id="<?= $admin['id']; ?>" >Remove</button>
                        </td>


                      

             </tr> 
    <?php
     $count++; 
    endforeach;
   ?>
   
<?php else: ?>
    <tr>
        <td colspan="5" class="p-2">No record found.</td>
    </tr>
<?php endif; ?>