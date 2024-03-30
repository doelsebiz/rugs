@if(session('success'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            swal('success','{{session("success")}}','success').then(function(){
                
            });
        });
    </script>
@endif


@if(session('error'))
    <div class="alert alert-danger alert-dismissable fade show text-center">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        {{session('error')}}
    </div>
@endif