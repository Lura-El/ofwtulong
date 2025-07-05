$(document).ready(function() {

    $('.tab').hide();
    $('#contact-us-con').show();
    
    $('.button').on('click', function() {
        $('.button').removeClass('active'); 
        $(this).addClass('active');
        
        $('.tab').hide(); 
        
        let targetTab = $(this).data('target');
        $(targetTab).show();
    });

    //fetch 
    $(document).on('click', '.see-all-btn', function () {
        $(this).siblings('.details-container').slideDown();
    });

    $(document).on('click', '.done-btn', function () {
        $(this).parent('.details-container').slideUp();
    });

    $.post("admin/dash.get.php",function(data) {

        let tableBody = "<tbody>";

            data.forEach((result, index) => {
                const visibleData = `<td>${result.id}</td><td>${result.name}</td><td>${result.email_address}</td>`;

                const hiddenDetails = 
                    Object.entries(result).map(([key, value]) => {
                        return `<p><strong>${key}:</strong> ${value}</p>`;
                    })
                    .join('');

                    tableBody += `
                        <tr>
                            ${visibleData}
                            <td>
                                <button class="see-all-btn" data-index="${index}">See All</button>
                                <div id="hiddenDetails-con" class="details-container" style="display:none">
                                    ${hiddenDetails}
                                    <button class="done-btn">Done</button>
                                </div>
                            </td>
                        </tr>
                    `;
            });

        tableBody += "</tbody>";
        $('#contact-table').append(tableBody);

    }).fail(function() {
        console.error("Error: Unable to fetch data.");
    });

});