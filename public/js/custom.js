 $(document).ready(function () {
        $(".course-material-link").click(function (event) {
             event.preventDefault();
            $(".add-course-material").css('display','inline-block');
            $(".add-course-topics").css('display','inline-block');
             $(".add-course-tasks").css('display','none');
             $(".topic-task-section").css('display','-webkit-box');

        });

        $(".course-topic-link").click(function (event) {
             event.preventDefault();

            $(".add-course-tasks").css('display','inline-block');
             $(".add-course-topics").css('display','none');
            $(".add-course-material").css('display','none');
            $(".topic-task-section").css('display','none');

        });
        $(".topic-task-link").click(function (event) {
             event.preventDefault();
              $(".add-course-material").css('display','none');

            $(".topic-task-section").css('display','-webkit-box');

        });

        $('.course-material-navs').on('click', 'li', function() {
                $(this).addClass('active').siblings().removeClass('active');

        });

        $('textarea').ckeditor();


         // Add new element
     $(".add").click(function(){

      // Finding total number of elements added
      var total_element = $(".element").length;
     
      // last <div> with element class id
      var lastid = $(".element:last").attr("id");
      var split_id = lastid.split("_");
      var nextindex = Number(split_id[1]) + 1;

      var max = 5;

      // Check total number elements
      if(total_element < max ){
       // Adding new div container after last occurance of element class
       $(".element:last").after("<div class='element' id='div_"+ nextindex +"'></div>");
     
       // Adding element to <div>
       $("#div_" + nextindex).append("<input type='file' class='form-control' placeholder='Choose File' id='txt_"+ nextindex +"' style='width: 30%; display: inline-block;'>&nbsp;<button id='remove_" + nextindex + "' class='remove btn btn-warning'>Remove </button>");
     
      }
     
     });

     // Remove element
     $('.container').on('click','.remove',function(){
     
      var id = this.id;
      var split_id = id.split("_");
      var deleteindex = split_id[1];

      // Remove <div> with id
      $("#div_" + deleteindex).remove();

     });

      $('.modal').on('hidden', function(){
              $.clearFormFields(this)
        });
       

        // $('.openModal').on('click',function(){
        //     $("#roles  option").each(function(){

        //         this.selected=false;

        //     });
        //     $('.form-horizontal').reset();
        // });
        $('#EditUserModal').on('show.bs.modal', function (e) {
            var btn = $(e.relatedTarget);
            var fname = btn.data('fname');
            var lname = btn.data('lname');
            var email = btn.data('email');
            var r = btn.data('roles');
            var roles = r.split(',');
            var r_id = btn.data('roles-id');
            var roles_id = r_id.split(',');
            console.log(r_id);
            var status = btn.data('status');
            var phone = btn.data('phone');
            var uni = btn.data('uni');
            var modal = $(this);
            var status_group = $('.status-group'); 
            modal.find('.modal-body #fname').val(fname);
            modal.find('.modal-body #lname').val(lname);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #phone').val(phone);
            modal.find('.modal-body #university').val(uni);
            modal.find('.modal-body #status').val(status);
            modal.find('.modal-body #roles').val(roles_id);

            if(status == 0){
              $('.status-group').find(' .filter-option').text('Inactives') ;
               $('.status-group').find(' .dropdown-toggle').attr({
                    "title" : "Inactives"
                  });
             }
             else{
                $('.status-group').find(' .filter-option').text('Active') ;
                 $('.status-group').find(' .dropdown-toggle').attr({
                    "title" : "Active"
                  });

             }
              $('.roles-group').find(' .filter-option').text(roles) ;
               $('.roles-group').find(' .dropdown-toggle').attr({
                    "title" : roles
                  });


        });

        $('.AddUserModalBtn').on('click',function(){
            $('.form-horizontal').show();
            $('.modal-title').text('Add New user');
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.frmAdduser').on('submit',function(){
            var frm = $(this);
            var btn = frm.find('#btnAddUser');
            var message = $("#message");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'addUser',
                method: 'POST',
                data: frm.serialize(),
                
                beforeSend:function(){
                      $('#success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                      $('.progress-bar').text(percentComplete + '%');
                      $('.progress-bar').css('width', percentComplete + '%');
                    },
                    error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        // $('#AddUserModal').modal('hide');
                        // console.log(data);
                    if(data.status =='success'){
                      $('.progress-bar').text('Added');
                          $('.progress-bar').css('width', '100%');
                          $('#success').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                           $('.frmAdduser')[0].reset();


                    }else{
                        $.each(data.errors, function(key, value){
                        $('.progress-bar').text('0%');
                                $('.progress-bar').css('width', '0%');
                            $("#message").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                        

                    }
 
                }
            });

            return false;


        });
        var user_id ;
        $('.EditUserModalBtn').on('click',function(){
            $('.modal-title').text('Edit user');
            var id = $(this).attr('data-id');
            user_id = id;
        });


         $('.frmEditUser').on('submit',function(){
            var frm = $(this);
            var btn = frm.find('#btnEditUser');
            var message = $("#message");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'editUser',
                method: 'POST',
                data: frm.serialize(),
                
              beforeSend:function(){
                    $('#success').empty();
                  },
                  uploadProgress:function(event, position, total, percentComplete)
                  {
                    $('.progress-bar').text(percentComplete + '%');
                    $('.progress-bar').css('width', percentComplete + '%');
                  },
                  error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        // $('#AddUserModal').modal('hide');
                        // console.log(data);
                     if(data.status =='success'){
                      $('.progress-bar').text('Edited');
                          $('.progress-bar').css('width', '100%');
                          $('#success1').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                        
                          $('.frmEditUser')[0].reset();
                    }else{
                        $.each(data.errors, function(key, value){
                        $('.progress-bar').text('0%');
                                $('.progress-bar').css('width', '0%');
                            $("#message").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                        

                    }
 
                }
            });

            return false;
            


        });
         $('#EditUserModal').on('hidden.bs.modal', function () {
             location.reload();
            });
         $('#AddUserModal').on('hidden.bs.modal', function () {
             location.reload();
            });



          $("#users").on('click','.btn-del',function(){
            var btn = $(this);
            var user_id = btn.attr('data-id');
            var message = $("#messageMain");
            message.html('')
            if( confirm('Are you sure you want to delete this record?') ){
                btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Wait...');
                
                $.ajax({
                url:'deleteUser',
                type: 'POST',
                 data:{'user_id': user_id }, 

                
  beforeSend:function(){
        $('#success').empty();
      },
      uploadProgress:function(event, position, total, percentComplete)
      {
        $('.progress-bar').text(percentComplete + '%');
        $('.progress-bar').css('width', percentComplete + '%');
      },
      error: function(){
                        btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        message.html('<div class="alert alert-danger">Communication Error</div>');
                    },
                success: function(e){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    if( e.status == 'success' ){
                        $("#user_"+user_id).remove();
                         message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+e.message+'</div>');
                    }else{
                         message.html('<div class="alert bg-red alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+e.message+'</div>');
                    }
                }
            });

        

            }

        });


          // Courses Modules

          $('.frmAddCourse').on('submit',function(){

            var frm = $(this);
            var btn = frm.find('#btnAddCourse');
            var message = $("#message");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'addCourse',
                method: 'POST',
                data: frm.serialize(),
                
              beforeSend:function(){
                    $('#success').empty();
                  },
                  uploadProgress:function(event, position, total, percentComplete)
                  {
                    $('.progress-bar').text(percentComplete + '%');
                    $('.progress-bar').css('width', percentComplete + '%');
                  },
                error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        // $('#AddUserModal').modal('hide');
                        // console.log(data);
                    if(data.status =='success'){
                      $('.progress-bar').text('Added');
                          $('.progress-bar').css('width', '100%');
                          $('#success').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                          $('.frmAddCourse')[0].reset();


                    }else{
                        $.each(data.errors, function(key, value){
                        $('.progress-bar').text('0%');
                                $('.progress-bar').css('width', '0%');
                            $("#message").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                     

                    }
 
                }
            });

            return false;
 


        });

           $('#AddCourseModal').on('hidden.bs.modal', function () {
             location.reload();
            });
           $('#EditCourseModal').on('hidden.bs.modal', function () {
             location.reload();
            });

            var course_id ;
        $('.EditCourseModalBtn').on('click',function(){
            $('.modal-title').text('Edit Course');
            var id = $(this).attr('data-id');
            course_id = id;
        });

         $('#EditCourseModal').on('show.bs.modal', function (e) {
            var btn = $(e.relatedTarget);
            var name = btn.data('name');
            var subject = btn.data('subject');
            var start_date= btn.data('start-date');
            var completion_date = btn.data('completion-date');
            var objectives = btn.data('objectives');
            var important = btn.data('important');
            var setup = btn.data('setup');
            var id = btn.data('id');
            var modal = $(this);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #subject').val(subject);
            modal.find('.modal-body #start_date').val(start_date);
            modal.find('.modal-body #completion_date').val(completion_date);
            modal.find('.modal-body #course_objectives').val(objectives);
            modal.find('.modal-body #is_important').val(important);
            modal.find('.modal-body #setup').val(important);

            modal.find('.modal-body #course_id').val(id);

            if(important == 0){
              $('.is_important_div').find('.filter-option').text('No') ;
               $('.is_important_div').find('.dropdown-toggle').attr({
                    "title" : "No"
                  });
             }
             else{
                $('.is_important_div').find('.filter-option').text('Yes') ;
                 $('.is_important_div').find('.dropdown-toggle').attr({
                    "title" : "Yes"
                  });

             }

            if(setup == 0){
              $('.setup_div').find('.filter-option').text('Incomplete') ;
               $('.setup_div').find('.dropdown-toggle').attr({
                    "title" : "Incomplete"
                  });
             }
             else{
                $('.setup_div').find('.filter-option').text('Complete') ;
                 $('.setup_div').find('.dropdown-toggle').attr({
                    "title" : "Complete"
                  });

             }
        


        });



          $('.frmEditCourse').on('submit',function(){
            var frm = $(this);
            var btn = frm.find('#btnEditCourse');
            var message = $("#message1");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'editCourse',
                method: 'POST',
                data: frm.serialize(),
                
                beforeSend:function(){
                      $('#success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                      $('.progress-bar').text(percentComplete + '%');
                      $('.progress-bar').css('width', percentComplete + '%');
                    },
                    error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    if(data.status =='success'){
                      $('.progress-bar').text('Edited');
                          $('.progress-bar').css('width', '100%');
                          $('#success').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                        $('.frmEditCourse')[0].reset();

                    }else{
                        $.each(data.errors, function(key, value){
                        $('.progress-bar').text('0%');
                          $('.progress-bar').css('width', '0%');
                            $("#message").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                         // message.html('<div class="alert bg-red alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.errors.fname+'<br>'+data.errors.lname+'<br>'
                         //    +data.errors.email+'<br>'+data.errors.roles+'<br>'+data.errors.password+'<br>'+data.errors.status
                         //    +'<br>'+data.errors.university+'<br>'+data.errors.phone+'</div>');

                    }
 
                }
            });

            return false;


        });

           $("#courses").on('click','.btn-del',function(){
            var btn = $(this);
            var course_id = btn.attr('data-id');
            var message = $("#messageMain");
            message.html('')
            if( confirm('Are you sure you want to delete this record?') ){
                btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Wait...');
                
                $.ajax({
                url:'deleteCourse',
                type: 'POST',
                 data:{'course_id': course_id }, 

                
                beforeSend:function(){
                      $('#success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                      $('.progress-bar').text(percentComplete + '%');
                      $('.progress-bar').css('width', percentComplete + '%');
                    },
                    error: function(){
                        btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        message.html('<div class="alert alert-danger">Communication Error</div>');
                    },
                success: function(e){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    if( e.status == 'success' ){
                        $("#course_"+course_id).remove();

                         message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+e.message+'</div>');
                    }else{
                         message.html('<div class="alert bg-red alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+e.message+'</div>');
                    }
                }
            });

        

            }

        });

           // Topic Module


          $('.add-course-topics').on('click',function(){
            // $('.form-horizontal').show();
            $('.modal-title').text('Add New Topic');
            $('#btnAddTopic').text('Save Topic');
        });


          $('.frmAddTopic').on('submit',function(){
               $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            var frm = $(this);
            var btn = frm.find('#btnAddTopic');
            var message = $("#message");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'/admin/course/addTopic',
                method: 'POST',
                data: frm.serialize(),
                
                beforeSend:function(){
                      $('#success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                      $('.progress-bar').text(percentComplete + '%');
                      $('.progress-bar').css('width', percentComplete + '%');
                    },
                    error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        // $('#AddUserModal').modal('hide');
                        // console.log(data);
                    if(data.status =='success'){
                      $('.progress-bar').text('Added');
                          $('.progress-bar').css('width', '100%');
                          $('#success').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                        $('.frmAddTopic')[0].reset();

                    }else{
                        $.each(data.errors, function(key, value){
                        $('.progress-bar').text('0%');
                                $('.progress-bar').css('width', '0%');
                            $("#message").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                     

                    }
 
                }
            });

            return false;
 


        });

           $('#AddTopicsModal').on('hidden.bs.modal', function () {
             location.reload();
            });



           // Task Module

           $('.frmAddTask').on('submit',function(){
              event.preventDefault();

           $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
            var frm = $(this);

            var btn = frm.find('#btnAddTask');
            var message = $("#taskmessage");
            btn.attr('disabled','disabled').attr('data-temp',btn.html()).html('Please wait...');
             message.html('');

            $.ajax({
                url:'/admin/course/addTask',
                method:"POST",
               data:new FormData(this),
               dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
                
                beforeSend:function(){
                      $('#success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                      $('.progress-bar').text(percentComplete + '%');
                      $('.progress-bar').css('width', percentComplete + '%');
                    },
                    error: function(){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                    message.html('<div class="alert alert-danger">Communication Error</div>');
                },
                success: function(data){
                    btn.removeAttr('disabled').html(btn.attr('data-temp'));
                        // $('#AddUserModal').modal('hide');
                       
                    if(data.status =='success'){
                         // message.html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                          $('.progress-bar').text('Added');
                          $('.progress-bar').css('width', '100%');
                          $('#success').html('<div class="alert bg-green alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+data.message+'</div>');
                         
                          $('.frmAddTask')[0].reset();
                          $('#tags').remove();

                    }else{
                        $.each(data.errors, function(key, value){
                      $('.progress-bar').text('0%');
                              $('.progress-bar').css('width', '0%');
                            $("#taskmessage").append("<div class='alert bg-red alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>" + value + '</div>');
                        });
                     

                    }
 
                }
            });

            return false;
 


        });

           $('#AddTaskModal').on('hidden.bs.modal', function () {
             location.reload();
            });

           $(".course-topic-link").on('click',function(){
              var topic_id = $(this).attr('data-id');
              
               $('.add-course-tasks').attr('data-id', topic_id);
           });
            $(".add-course-tasks").on('click',function(){
              var topic_id = $(this).attr('data-id');
              
                $('#topic_id_hidden').val(topic_id);
           });




            $(".topic-task-link").on('click',function(){
                  event.preventDefault();

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              var task_id = $(this).attr('data-id');
              
                $.ajax({
                url:'/admin/course/TaskDetail',
                 type: "post",
                data: {task_id:task_id},
               cache: false,
                error: function(){
                    alert('Communication Error');
                },
                success: function(data){
                  console.log(data);
                }

            });

            return false;
           });
            
});