@include('theme.header')
@include('theme.sidebar')

  
  <!-- Bordered table start -->
  <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assigned Complains</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <div class="row">
                         <div class="col-md-3 col-12">
                                    <label>Department</label>
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            <option value="square">Cardiology</option>
                                            <option value="rectangle">Emergency</option>
                                            <option value="rombo">Radiology</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Register By</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Raheel Ahmed"
                                            name="city-column">
                                    </div>
                            </div>

                            <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Assigned To</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Ahmed Muneeb"
                                            name="city-column">
                                    </div>
                            </div>
                            
                            <div class="col-md-2 col-12 mt-4">
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            <option value="square">ALL</option>
                                            <option value="square">Pending</option>
                                            <option value="square">Approved</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="col-md-1 col-12 mt-4">
                                     <div class="form-group">
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Search</button>
                                        </div>
                                    </div>
                        </div>
                        </div>
                        <!-- table bordered -->
                        <div class="table-responsive" id="scroll">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Complain Description</th>
                                        <th>Department</th>
                                        <th>Register By</th>
                                        <th>Order Type</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td>The Mri Machine isn't Working </td>
                                        <td class="text-bold-500">Radiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                        <td>
                                             <button type="submit" class="btn btn-primary me-1 mb-1">Resolve</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2</td>
                                        <td>The CT Machine parts damaged</td>
                                        <td class="text-bold-500">Cardiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                        <td>
                                             <button type="submit" class="btn btn-primary me-1 mb-1">Resolve</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3</td>
                                        <td>The Xray Machine isn't showing images</td>
                                        <td class="text-bold-500">Emergency</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                        <td>
                                             <button type="submit" class="btn btn-primary me-1 mb-1">Resolve</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">4</td>
                                        <td>The Printer isn't Working</td>
                                        <td class="text-bold-500">OPD</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                        <td>
                                             <button type="submit" class="btn btn-primary me-1 mb-1">Resolve</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">5</td>
                                        <td>The Mri Machine isn't Working</td>
                                        <td class="text-bold-500">Radiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                        <td>
                                             <button type="submit" class="btn btn-primary me-1 mb-1">Resolve</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
             

                <!---Card 3-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Resolved Complains</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <div class="row">
                         <div class="col-md-5 col-12">
                                    <label>Department</label>
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            <option value="rombo">All</option>
                                            <option value="square">Cardiology</option>
                                            <option value="rectangle">Emergency</option>
                                            <option value="rombo">Radiology</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="city-column">From Date</label>
                                        <input type="date" id="city-column" class="form-control"
                                            name="city-column">
                                    </div>
                            </div>

                            <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="city-column">To Date</label>
                                        <input type="date" id="city-column" class="form-control"
                                            name="city-column">
                                    </div>
                            </div>

                            <div class="col-md-1 col-12 mt-4">
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Search</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- table bordered -->
                        <div class="table-responsive" id="scroll">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Complain Description</th>
                                        <th>Department</th>
                                        <th>Register By</th>
                                        <th>Order Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td>The Mri Machine isn't Working </td>
                                        <td class="text-bold-500">Radiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2</td>
                                        <td>The CT Machine parts damaged</td>
                                        <td class="text-bold-500">Cardiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3</td>
                                        <td>The Xray Machine isn't showing images</td>
                                        <td class="text-bold-500">Emergency</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">4</td>
                                        <td>The Printer isn't Working</td>
                                        <td class="text-bold-500">OPD</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">5</td>
                                        <td>The Mri Machine isn't Working</td>
                                        <td class="text-bold-500">Radiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
    <!-- Bordered table end -->

@include('theme.footer')