@include('paneladmin.header')

		<!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="copy-print-csv" class="table v-middle">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                              <th>Project Category Name</th>
                                                <th>Project Name</th>
                                              <!--<th>Description</th>-->

                                              <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <?php
                                        $a=1;
                                        ?>
                                        <tbody>
                                            @foreach ($contentdetails as $data)
                                            <tr>
                                                <td>
                                                   {{$a++}}
                                                </td>
                                              <td>
                                                  <div class="media-box">

                                                      <div class="media-box-body">
                                                          {!! $data->service_name !!}
                                                      </div>
                                                  </div>
                                              </td>

                                             <td>{{ substr($data->description,0,30) }}...</td>



                                              <td>
                                     <button class="@if($data->status==1)btn btn-sm btn-outline-primary @endif @if($data->status==0) btn btn-sm btn-outline-danger @endif" onclick="changeStatus('{{$data->id}}','{{$data->status}}')">
                                     @if($data->status==1) Active @endif @if($data->status==0) Inactive @endif</button>

                                        	<button class="btn btn-sm btn-outline-info"><a href="{{ url('admin-project-topic-view/'.$data->id) }}">
                                                <span class="icon-eye1"></span></a></button>

											<button class="btn btn-sm btn-outline-info"><a href="{{ url('admin-project-topic-edit/'.$data->id) }}">
                                                <span class="icon-edit1"></span></a></button>
										<button class="btn btn-sm btn-outline-danger"><a href="{{ url('admin-project-topic-delete/'.$data->id) }}">
                                                <span class="icon-trash-2"></span></a></button>
												</td>                                            </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                </div>
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->
@include('paneladmin.footer')
<script>

 function userDelete(userid,imagename){
  //alert();


        $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
            type:'POST',
            dataType: 'JSON',
            url:'/admin/service-delete/',
            data: {"userregid":userid,
                "imagename":imagename,
                 "_token": $('#token').val()
            },
            success:function(response)  {
               location.reload();
            }
        });
    }


function changeStatus(userid,userstatus){


   $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
            type:'POST',
            dataType: 'JSON',
            url:'/admin-course-topics-status',
            data: {"userregid":userid,
                "userstatus":userstatus,
                 "_token": $('#token').val()
            },
            success:function(response)  {
               location.reload();
            }
        });
    }

   </script>
