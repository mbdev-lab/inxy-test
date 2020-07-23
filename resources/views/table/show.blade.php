@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 50px">
                    <div class="panel-body">
                        <p>
                            <b>id:</b> {{ $item->id }}
                        </p>
                        <p>
                            <b>base_64 :</b> {{ $item->base_64 }}
                        </p>
                        <p>
                            <b>provider_name :</b> {{ $item->provider_name }}
                        </p>
                        <p>
                            <b>provider :</b> {{ $item->provider }}
                        </p>
                        <p>
                            <b>location :</b> {{ $item->location }}
                        </p>
                        <p>
                            <b>city :</b> {{ $item->city }}
                        </p>
                        <p>
                            <b>country :</b> {{ $item->country }}
                        </p>
                        <p>
                            <b>datacenter :</b> {{ $item->datacenter }}
                        </p>
                        <p>
                            <b>brand_label :</b> {{ $item->brand_label }}
                        </p>
                        <p>
                            <b>brand :</b> {{ $item->brand }}
                        </p>
                        <p>
                            <b>model :</b> {{ $item->model }}
                        </p>
                        <p>
                            <b>cpu :</b> {{ $item->cpu }}
                        </p>
                        <p>
                            <b>core :</b> {{ $item->core }}
                        </p>
                        <p>
                            <b>ram :</b> {{ $item->ram }}
                        </p>
                        <p>
                            <b>drive_label :</b> {{ $item->drive_label }}
                        </p>
                        <p>
                            <b>drive :</b> {{ $item->drive }}
                        </p>
                        <p>
                            <b>show_bw :</b> {{ $item->show_bw }}
                        </p>
                        <p>
                            <b>bandwidth :</b> {{ $item->bandwidth }}
                        </p>
                        <p>
                            <b>ip :</b> {{ $item->ip }}
                        </p>
                        <p>
                            <b>price :</b> {{ $item->price }}
                        </p>
                        <p>
                            <b>sell_out_start :</b> {{ $item->sell_out_start }}
                        </p>
                        <p>
                            <b>sell_out_end :</b> {{ $item->sell_out_end }}
                        </p>
                        <p>
                            <b>discount :</b> {{ $item->discount }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
