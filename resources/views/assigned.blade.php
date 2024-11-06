@include('theme.header')
@include('theme.sidebar')

<style>
    #scroll{
            max-width: 100%; /* Limit the maximum width */
            max-height: 300px; /* Set a maximum height for vertical scrolling */
            overflow-y: scroll; /* Enable scrolling */
            padding: 10px;
        }
        ::-webkit-scrollbar {
        width: 13px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #435ebe; 
        border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #b30000; 
        }
    </style>
  
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
                                            <option value="rectangle">OPD</option>
                                            <option value="rombo">Radiology</option>
                                        </select>
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
                                     <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Resolved</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2</td>
                                        <td>The CT Machine parts damaged</td>
                                        <td class="text-bold-500">Cardiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                        <td>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Resolved</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3</td>
                                        <td>The Xray Machine isn't showing images</td>
                                        <td class="text-bold-500">Emergency</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                        <td>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Resolved</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">4</td>
                                        <td>The Printer isn't Working</td>
                                        <td class="text-bold-500">OPD</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Normal</td>
                                        <td>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Resolved</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">5</td>
                                        <td>The Mri Machine isn't Working</td>
                                        <td class="text-bold-500">Radiology</td>
                                        <td>Raheel Ahmed</td>
                                        <td>Urgent</td>
                                        <td>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Resolved</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
              
            </div>
        </div>
    </section>
    <!-- Bordered table end -->

@include('theme.footer')