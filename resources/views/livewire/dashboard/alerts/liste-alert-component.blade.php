<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Listes des Alerts</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Alerts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3>Listes des Alerts</h3>
                    </div>

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($alerts as $alert)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $alert->user_id }}
                                </td>

                                <td>
                                    {{ $alert->path }}
                                </td>
                                <td>
                                    {{ $alert->geo_location }}
                                </td>
                                <td>
                                    {{ $alert->message }}
                                </td>
                                <td>
                                    {{ $alert->agent_id }}
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens">

                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Modification" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" wire:click.prevent='getElementById({{$alert['id']}})'>
                                                <img src="{{ asset('assets/dash/images/icon/call-2.svg') }}" alt="call-2">

                                            </a>

                                        </li>

                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deleteAlert({{$alert['id']}})">
                                                <img src="{{ asset('assets/dash/images/icon/trash-2.svg') }}" alt="trash-2">
                                            </a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$alerts->links()}}

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('livewire.dashboard.partials.footer')

        <!-- End Footer Area -->
    </main>
</div>
@section('scripts')
<script src="{{ asset('assets/dash/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/dash/js/jbox.all.min.js') }}"></script>
@endsection
