<?php 

$fetch_all_reports = $db->fetch_all_reports($session_account[0]['id']);

if ($fetch_all_reports): ?>
    <?php 
    
    $count=1;
        foreach ($fetch_all_reports as $report):

  
        ?>

        <tr class="hover:bg-gray-50">
                        <td class="px-4 sm:px-6 py-4"><?= $count; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= date("F j, Y", strtotime($report['date_added'])); ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $report['email']; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $report['bullyingType']; ?> </td>
                        <td class="px-4 sm:px-6 py-4">
                            <?= (strlen($report['messages']) > 30) ? substr($report['messages'], 0, 30) . '...' : $report['messages']; ?>
                            <?php if (!empty($report['imagesProof'])): ?>
                                <img src="../upload_messages/<?= htmlspecialchars($report['imagesProof']); ?>" alt="" class="w-16 h-16 object-cover" id="image_<?= $report['id']; ?>" data-image="<?= htmlspecialchars($report['imagesProof']); ?>">
                            <?php endif; ?>
                        </td>
                        <td class="px-4 sm:px-6 py-4">
                            <button class="view-btn px-4 py-2 bg-blue-500 text-white rounded" data-message="<?= htmlspecialchars($report['messages']); ?>" data-image="<?= htmlspecialchars($report['imagesProof']); ?>">View</button>
                        </td>

                                    <!-- Modal -->
                <div id="ViewReportModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" style="display:none;">
                    <div class="bg-white p-6 rounded-lg w-96 max-h-[80vh] overflow-y-auto">
                        <h3 class="text-lg font-semibold">Message Details</h3>
                        <p id="report-message" class="mt-2 break-words"></p>
                        <div id="report-image-container" class="mt-4 hidden">
                            <img id="report-image" src="" alt="" class="w-full h-auto">
                        </div>
                        <button id="close-modal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </div>





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