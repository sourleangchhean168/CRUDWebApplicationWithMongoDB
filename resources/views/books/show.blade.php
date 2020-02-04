@extends('books.layout')


@section('content')

      
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
        
               
                </tfoot>
              </table>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $book->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $book->detail }}
            </div>
        </div>
    </div>
@endsection