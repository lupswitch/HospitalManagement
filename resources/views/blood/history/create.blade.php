@extends('partials.master')
@section('page_title')
    New Blood Request
@endsection
@section('page_buttons')

@endsection
@section('content')



    {{Form::open(['route' => ['blood.history.store'], 'files' => true,'id'=>"Register_Patient_Forms"])}}
    {{--@include('partials.errors')--}}
    {{--{{csrf_field()}}--}}
    <div class="col-sm-6">

        <div class="form-group">
            <label>Blood Group</label>
            <select class="form-control" name="blood_group_id">
                @foreach($bloodGroups as $bloodGroup)
                    <option value="{{$bloodGroup->id}}">{{$bloodGroup->name}} ( {{$bloodGroup->rh_factor}} )</option>

                @endforeach
            </select>
        </div>

        <div class="form-group @if ($errors->has('name')) has-error @endif">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
        </div>


        <div class="form-group @if ($errors->has('mobile')) has-error @endif">
            {!! Form::label('mobile', 'Mobile Number') !!}
            {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile Number']) !!}
            @if ($errors->has('mobile')) <p
                    class="help-block">{{ $errors->first('mobile') }}</p> @endif
        </div>


    </div>

    <div class="col-md-12">

        <div class="form-group">

            <div class="form-group @if ($errors->has('details')) has-error @endif">
                {!! Form::label('details', 'Details') !!}
                {!! Form::textarea('details', null, ['class' => 'form-control', 'placeholder' => 'Details' , 'rows' => 3]) !!}
                @if ($errors->has('details')) <p
                        class="help-block">{{ $errors->first('details') }}</p> @endif
            </div>


        </div>

    </div>
    </div>
    <!-- /.col-lg-6 (nested) -->
    <div class="col-sm-6">


    </div>


    <!-- /.col-lg-6 (nested) -->
    </div>

    <div class="col-sm-12 ">

        <input type="submit" class="btn btn-success btn-md pull-right" value="Submit Request">

    </div>

    {!! Form::close() !!}



    <!-- /#page-wrapper -->


    <!-- /#wrapper -->




@endsection

@section('jsfiles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


    <script language="javascript" type="text/javascript" src="/css/dist/validator/validator.min.js"></script>
    <script language="javascript" type="text/javascript" src="/css/dist/validator/validator.js"></script>









    <script>
        //datepicker
        $(function () {


            $.fn.datepicker.defaults.format = "dd/mm/yyyy";
            $('.DatePicker').datepicker({
                autoclose: true,
                clearBtn: true,
                todayHighlight: true
            });


        });


    </script>




    {{--<script language="javascript" type="text/javascript" src="public/js/validator.min.js"></script>--}}
    {{--<script language="javascript" type="text/javascript" src="public/js/validator.js"></script>--}}
    <script>
        $(document).ready(function () {
            $('#Register_Patient_Form')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
//                    valid: 'glyphicon glyphicon-ok',
//                    invalid: 'glyphicon glyphicon-remove',
//                    validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {


                        dob: {
                            validators: {
                                notEmpty: {},

                                date: {
                                    format: 'DD/MM/YYYY',

                                },
                            }
                        },
                        name: {
                            validators: {
                                notEmpty: {},
                            }
                        },

                        mobile: {
                            validators: {
                                notEmpty: {},
                                integer: {},
                            }
                        }


                    }
                })
        });
    </script>






@endsection
    
