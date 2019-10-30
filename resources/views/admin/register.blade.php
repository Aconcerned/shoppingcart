@extends('layouts.master')

@section('title')
Registered Roles
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
                @if (section('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Country</th>
                      <th>City</th>
                      <th class="text-right">Salary</th>
                      <th>Editar</th>
                      <th>Borrar</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                      <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td class="text-right">$36,738</td>
                        <td>
                          <a href="/role-edit/{{ $row->name }}" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                            <form action="/role-delete/{{ $row->name }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                      </tr>
                        @endforeach
                      <tr>
                        <td>Minerva Hooper</td>
                        <td>Curaçao</td>
                        <td>Sinaai-Waas</td>
                        <td class="text-right">$23,789</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Sage Rodriguez</td>
                        <td>Netherlands</td>
                        <td>Baileux</td>
                        <td class="text-right">$56,142</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Philip Chaney</td>
                        <td>Korea, South</td>
                        <td>Overland Park</td>
                        <td class="text-right">$38,735</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Doris Greene</td>
                        <td>Malawi</td> 
                        <td>Feldkirchen in Kärnten</td>
                        <td class="text-right">$63,542</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mason Porter</td>
                        <td>Chile</td>
                        <td>Gloucester</td>
                        <td class="text-right">$78,615</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Jon Porter</td>
                        <td>Portugal</td>
                        <td>Gloucester</td>
                        <td class="text-right">$98,615</td>
                        <td>
                          <a href="#" class="btn btn-success">Editar</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">Borrar</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>