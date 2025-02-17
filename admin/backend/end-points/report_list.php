<?php 

$fetch_all_reports = $db->fetch_all_reports();
if ($fetch_all_reports): 
    $count=1;
        foreach ($fetch_all_reports as $report): ?>

        <tr class="hover:bg-gray-50">
                        <td class="px-4 sm:px-6 py-4"><?= $count; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= date("F j, Y", strtotime($report['date_added'])); ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $report['email']; ?></td>
                        <td class="px-4 sm:px-6 py-4"><?= $report['bullyingType']; ?> </td>
                        <td class="px-4 sm:px-6 py-4">
                        <p class="ml-4"><?= (strlen($report['messages']) > 30) ? substr($report['messages'], 0, 30) . '...' : $report['messages']; ?></p>
    <?php if (!empty($report['imagesProof'])): ?>
        <!-- Image with indentation -->
        <div class="mb-2 ml-4">
            <img src="../upload_messages/<?= htmlspecialchars($report['imagesProof']); ?>" alt="" class="w-16 h-16 object-cover" id="image_<?= $report['id']; ?>" data-image="<?= htmlspecialchars($report['imagesProof']); ?>">
        </div>
    <?php endif; ?>

    <!-- Message with indentation -->
   
</td>


                        <td class="px-4 sm:px-6 py-4">
                            <button class="view-btn px-4 py-2 bg-blue-500 text-white rounded" data-message="<?= $report['messages']; ?>" data-image="<?= $report['imagesProof']; ?>">View</button>
                            <button class="delete-btn px-4 py-2 bg-red-500 text-white rounded" data-id="<?= $report['report_id']; ?>" >Remove</button>
                        </td>


                        <!-- Modal -->
                        <div id="ViewReportModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" style="display:none;">
                            <div class="bg-white p-6 rounded-lg w-[600px] max-w-full max-h-[80vh] overflow-y-auto shadow-md relative">
                                
                                <!-- Close Button (top-right corner) -->
                                <button id="CloseReportModal" class="absolute top-2 right-2 text-xl text-gray-600 hover:text-gray-800 transition duration-200 ease-in-out">
                                    &times;
                                </button>

                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Message Details</h3>

                                <!-- Spinner -->
                                <div class="spinner" id="spinner" style="display:none;">
                                    <div class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
                                        <div class="w-8 h-8 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
                                    </div>
                                </div>

                                <!-- Report Message -->
                                <p id="report-message" class="text-sm text-gray-700 break-words overflow-auto"></p>

                                <!-- Report Image Section -->
                                <div id="report-image-container" class="mt-4 hidden">
                                    <img id="report-image" src="" alt="" class="w-full h-auto mt-2 border rounded-md">
                                </div>
                            </div>
                        </div>








                                             <!-- Modal -->
                        <div id="RemoveReportModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" style="display:none;">
                            <div class="bg-white p-6 rounded-lg w-96 max-h-[80vh] overflow-y-auto">
                                <h3 class="text-lg font-semibold mb-3">Warning</h3>
                                                            <!-- Spinner -->
                                <div class="spinner" id="spinner" style="display:none;">
                                    <div class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
                                    <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
                                    </div>
                                </div>
                                <hr>
                                <p class="text-red-500 mt-2">Are you sure you want to remove this report? This action cannot be undone.</p> <!-- Warning message -->
                                <form id="frmRemoveReport">
                                    <input type="hidden" name="reportId" id="reportId">
                                    <button type="submit" name="btnRemoveReport" id="btnRemoveReport" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Yes, Remove</button>
                                </form>
                                
                                <button id="CloseRemoveReportModal" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
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