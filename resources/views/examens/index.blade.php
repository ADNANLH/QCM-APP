@extends('layouts.layout')

@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des examens</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="{{route('examens.add')}}" class="btn btn-info">
                                <i class="fas fa-plus"></i> Nouveau Examen
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="p-0 col-md-3">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="search-input" id="search-input" class="form-control"
                                        placeholder="Recherche">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="search_ajax">

                            {{-- @include('Projects.table') --}}
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped text-nowrap table-tasks ">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Examen</th>
                                            <th>Description</th>
                                            <th>Date de début</th>
                                            <th>Date de fin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('examens.edit') }}" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Past simple</td>
                                            <td>Passer cette examende Past simple avant la date de 28-03-2024</td>
                                            <td>20-03-2024</td>
                                            <td>28-03-2024</td>
                                            <td>
                                                <a href="#" class='btn btn-default btn-sm' title='Afficher'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class='btn btn-default btn-sm' title='Modifier'>
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class='btn btn-danger btn-sm ' title='Supprimer'>
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    {{-- <input type="hidden" id='page' value="1"> --}}
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
