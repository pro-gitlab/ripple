@extends('Ripple::layouts.app')
@section('page-content')
{{-- Page Header --}}
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                <i class="fa fa-database"></i>&nbsp;New Table <small></small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Category</li>
                <li><a class="link-effect" href="">Page</a></li>
            </ol>
        </div>
    </div>
</div>
{{-- END Page Header --}}

{{-- Page Content --}}
<div class="content">
    {{-- My Block --}}
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Create New Table</h3>
        </div>
        <div class="block-content clearfix">
            <div class="table-responsive">
                <table class="table table-striped table-borderless text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">
                                Type
                            </th>
                            <th class="text-center">
                                Length
                            </th>
                            <th class="text-center">
                                Index
                            </th>
                            <th class="text-center">
                                Default
                            </th>
                            <th class="text-center">
                                unsigned
                            </th>
                            <th class="text-center">
                                Nullable
                            </th>
                            <th class="text-center">
                                Increment
                            </th>
                            <th class="text-center">
                                <i class="fa fa-bolt"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" value="id">
                            </td>
                            <td>
                                <select class="form-control" style="max-width: 150px">
                                    <option >INT</option>
                                    <option >VARCHAR</option>
                                    <option >TEXT</option>
                                    <option title="">DATE</option>
                                    <optgroup label="Numeric">
                                        <option >TINYINT</option>
                                        <option>SMALLINT</option>
                                        <option>MEDIUMINT</option>
                                        <option>INT</option>
                                        <option>BIGINT</option>
                                        <option disabled="disabled">-</option>
                                        <option>DECIMAL</option>
                                        <option>FLOAT</option>
                                        <option>DOUBLE</option>
                                        <option>REAL</option>
                                        <option disabled="disabled">-</option>
                                        <option >BIT</option>
                                        <option>BOOLEAN</option>
                                        <option >SERIAL</option>
                                    </optgroup>
                                    <optgroup label="Date and time">
                                        <option >DATE</option>
                                        <option >DATETIME</option>
                                        <option >TIMESTAMP</option>
                                        <option >TIME</option>
                                        <option >YEAR</option>
                                    </optgroup>
                                    <optgroup label="String">
                                        <option >CHAR</option>
                                        <option >VARCHAR</option>
                                        <option disabled="disabled">-</option>
                                        <option >TINYTEXT</option>
                                        <option >TEXT</option>
                                        <option >MEDIUMTEXT</option>
                                        <option >LONGTEXT</option>
                                        <option disabled="disabled">-</option>
                                        <option >BINARY</option>
                                        <option >VARBINARY</option>
                                        <option disabled="disabled">-</option>
                                        <option >TINYBLOB</option>
                                        <option >MEDIUMBLOB</option>
                                        <option >BLOB</option>
                                        <option >LONGBLOB</option><option disabled="disabled">-</option>
                                        <option >ENUM</option>
                                        <option title="">SET</option>
                                    </optgroup>
                                    <optgroup label="Spatial">
                                        <option >GEOMETRY</option>
                                        <option >POINT</option>
                                        <option >LINESTRING</option>
                                        <option >POLYGON</option>
                                        <option >MULTIPOINT</option>
                                        <option >MULTILINESTRING</option>
                                        <option >MULTIPOLYGON</option>
                                        <option >GEOMETRYCOLLECTION</option>
                                    </optgroup>
                                    <optgroup label="JSON">
                                        <option >JSON</option>
                                    </optgroup>
                                </select>
                            </td>
                            <td>
                                <input type="number" style="max-width: 100px;" class="form-control" placeholder="Length">
                            </td>
                            <td>
                                <select class="form-control">
                                    <option>---</option>
                                    <option>Index</option>
                                    <option>Unique</option>
                                    <option selected>Primary</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control" style="max-width: 100px;">
                            </td>
                            <td>
                                <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-primary">
                                    <input checked="" type="checkbox"><span></span>
                                </label>
                            </td>
                            <td>
                                <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-primary">
                                    <input checked="" type="checkbox"><span></span>
                                </label>
                            </td>
                            <td>
                                <label class="css-input css-checkbox css-checkbox-rounded css-checkbox-primary">
                                    <input checked="" type="checkbox"><span></span>
                                </label>
                            </td>
                            <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 text-center" style="margin-bottom: 15px;">
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Add New Column</button>
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Add Timestamps</button>
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Add Soft Deletes</button>
            </div>
        </div>
    </div>
    {{-- END My Block --}}
</div>
{{-- END Page Content --}}
@stop


