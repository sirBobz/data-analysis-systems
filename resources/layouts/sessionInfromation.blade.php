
            <!-- Congrats message -->
            @if (session('info'))
                <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="fa fa-close"></i>
                </button>
                <h4><i class="icon fa fa-check"></i>
                    {{ session('info') }}
                 </h4>   
                </div>
            @endif

            <!-- Error message -->
            @if (session('message'))
                <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"><i class="fa fa-close"></i></button> <h4><i class="icon fa fa-check"></i>
                    {{ session('message') }}
                 </h4>
                </div>
            @endif


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif