@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-3">Add a item</h1>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('crud.update', $item->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name">provider_name:</label>
                            <input type="text" class="form-control" name="provider_name" value={{ $item->provider_name }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">provider:</label>
                            <input type="text" class="form-control" name="provider" value={{ $item->provider }}  />
                        </div>

                        <div class="form-group">
                            <label for="last_name">location:</label>
                            <input type="text" class="form-control" name="location" value={{ $item->location }}  />
                        </div>

                        <div class="form-group">
                            <label for="last_name">city:</label>
                            <input type="text" class="form-control" name="city" value={{ $item->city }}  />
                        </div>

                        <div class="form-group">
                            <label for="last_name">country:</label>
                            <input type="text" class="form-control" name="country" value={{ $item->country }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">datacenter:</label>
                            <input type="text" class="form-control" name="datacenter" value={{ $item->datacenter }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">brand_label:</label>
                            <input type="text" class="form-control" name="brand_label" value={{ $item->brand_label }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">brand:</label>
                            <input type="text" class="form-control" name="brand" value={{ $item->brand }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">model:</label>
                            <input type="text" class="form-control" name="model" value={{ $item->model }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">cpu:</label>
                            <input type="text" class="form-control" name="cpu" value={{ $item->cpu }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">core:</label>
                            <input type="text" class="form-control" name="core" value={{ $item->core }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">ram:</label>
                            <input type="text" class="form-control" name="ram" value={{ $item->ram }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">drive_label:</label>
                            <input type="text" class="form-control" name="drive_label" value={{ $item->drive_label }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">drive:</label>
                            <input type="text" class="form-control" name="drive" value={{ $item->drive }} />
                        </div>

                        <div class="form-group">
                            <label for="last_name">show_bw:</label>
                            <input type="text" class="form-control" name="show_bw" value={{ $item->show_bw }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">bandwidth:</label>
                            <input type="text" class="form-control" name="bandwidth" value={{ $item->bandwidth }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">ip:</label>
                            <input type="text" class="form-control" name="ip" value={{ $item->ip }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">price:</label>
                            <input type="text" class="form-control" name="price" value={{ $item->price }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">sell_out_start:</label>
                            <input type="date" class="form-control" name="sell_out_start" value={{ $item->sell_out_start }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">sell_out_end:</label>
                            <input type="date" class="form-control" name="sell_out_end" value={{ $item->sell_out_end }} />
                        </div>


                        <div class="form-group">
                            <label for="last_name">discount:</label>
                            <input type="text" class="form-control" name="discount" value={{ $item->discount }} />
                        </div>

                        <button type="submit" class="btn btn-primary-outline">Update</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
