<!--Select Chosen CDN link-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
<!--Bootstrap CDN link-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Multiple Row Using jQuery</div>

                <div class="card-body">
                    <form method="POST" action="#">

                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Division</th>
                                    <th>Place</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Durations</th>
                                    <th>Add/Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select type="text" class="chosen-select form-control" name="division_id[]"  required >
                                            <option value="">Select One</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Barisal</option>
                                            <option value="3">Khulna</option>
                                            <option value="4">Rajshahi</option>
                                            <option value="5">Rongpur</option>
                                            <option value="6">Chattagram</option>
                                            <option value="7">Maymenshing</option>
                                            <option value="8">Sylhet</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="place[]" value="" required autofocus>
                                    </td>
                                    <td>
                                        <input type="text" class="date-picker form-control" name="from_date[]" required autofocus>
                                    </td>
                                    <td>
                                        <input type="text" class="date-picker form-control" name="to_date[]" required autofocus>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="durations[]" value="" required autofocus>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm addMore"><i class='fas fa-plus-circle' style='font-size:18px'></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-center">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.addMore', function () {
        var thisRow = $(this).closest('tr');
        $("select.chosen-select").chosen('destroy');
        var nextRow = '<tr>'+thisRow.html()+'</tr>';
        thisRow.find('button').addClass('remove btn-outline-danger').removeClass('addMore btn-outline-primary').html('<i class="fas fa-trash" style="font-size:18px"></i>');
        $('tbody').append(nextRow);
        $('.chosen-select').chosen(0);
        $('.chosen-single').css({'height':'37px','line-height':'33px'});
        $('.date-picker').datepicker({format: 'dd-mm-yyyy'}).datepicker("setDate", new Date());

    });

    $(document).on('click', '.remove', function () {
        $(this).closest('tr').remove();
    });
</script>

<!--Select Chosen-->
<script>
    $(document).ready(function() {
        $(".chosen-select").chosen(0);
        $('.chosen-single').css({'height':'37px','line-height':'33px'});
    });
</script>
<!--Select Chosen-->
<script>
    $(document).ready(function() {
        $('.date-picker').datepicker({
            format: 'dd-mm-yyyy',
        });
    });
</script>