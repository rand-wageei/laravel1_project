@extends('admin.Master')

@section('title-content' , 'users')

@section('main_content')

<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Users</h1>
					</div>
					<div class="col-auto">
						<div class="page-utilities">
							<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
								<div class="col-auto">
									<form class="table-search-form row gx-1 align-items-center">
										<div class="col-auto">
											<input type="text" id="search-orders" name="searchorders"
												class="form-control search-orders" placeholder="Search">
										</div>
										<div class="col-auto">
											<button type="submit" class="btn app-btn-secondary">Search</button>
										</div>
									</form>

								</div><!--//col-->
								<div class="col-auto">

									<select class="form-select w-auto">
										<option selected value="option-1">All</option>
										<option value="option-2">This week</option>
										<option value="option-3">This month</option>
										<option value="option-4">Last 3 months</option>

									</select>
								</div>

							</div><!--//row-->
						</div><!--//table-utilities-->
					</div><!--//col-auto-->
				</div><!--//row-->


				<div class="d-grid gap-2 d-md-block">
					<a class="btn btn-success btn-lg" role="button" >Add User</a>
				  </div>



				  <br>


				<div class="tab-content" id="orders-table-tab-content">
					<div class="tab-pane fade show active" id="orders-all" role="tabpanel"
						aria-labelledby="orders-all-tab">
						<div class="app-card app-card-orders-table shadow-sm mb-5">
							<div class="app-card-body">
								<div class="table-responsive">
									<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">id</th>
												<th class="cell">name</th>
												<th class="cell">email</th>
												<th class="cell">phone</th>
												<!-- <th class="cell">Status</th>
												<th class="cell">Total</th> -->
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<!-- <tr>
												<td class="cell">#15346</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget
														volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span>
												</td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
												</td>
											</tr>
											<tr>
												<td class="cell">#15345</td>
												<td class="cell"><span class="truncate">Consectetur adipiscing
														elit</span></td>
												<td class="cell">Dylan Ambrose</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span
														class="note">03:16 AM</span></td>
												<td class="cell"><span class="badge bg-warning">Pending</span></td>
												<td class="cell">$96.20</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
												</td>
											</tr>
											<tr>
												<td class="cell">#15344</td>
												<td class="cell"><span class="truncate">Pellentesque diam
														imperdiet</span></td>
												<td class="cell">Teresa Holland</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span
														class="note">01:16 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$123.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
												</td>
											</tr>

											<tr>
												<td class="cell">#15343</td>
												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed
														mollis ipsum</span></td>
												<td class="cell">Jayden Massey</td>
												<td class="cell"><span class="cell-data">15 Oct</span><span
														class="note">8:07 PM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$199.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
												</td>
											</tr>

											<tr>
												<td class="cell">#15342</td>
												<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
												<td class="cell">Reina Brooks</td>
												<td class="cell"><span class="cell-data">12 Oct</span><span
														class="note">04:23 PM</span></td>
												<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
												<td class="cell">$59.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
												</td>
											</tr> -->

											<tr>
												<td class="cell">#15341</td>
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et
														sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span
														class="note">11:18 AM</span></td>
												<!-- <td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$678.26</td> -->
												<td class="cell">
													<a class="btn btn-danger btn-sm" role="button" >Delete</a>
													<!-- <a class="btn-sm app-btn-secondary" href="#">delete</a> -->
													<!-- <div class="btn-group"> -->

														<div class="btn-group dropend">
															<button type="button" class="btn app-btn-primary btn-sm dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false">
															User_Status
														</button>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="#">Admin</a></li>
															<li><a class="dropdown-item" href="#">user</a>
															</li>
														</ul>
													</div>
														
												</td>
											</tr>


											<tr>
												<td class="cell">#15341</td>
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et
														sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span
														class="note">11:18 AM</span></td>
												<!-- <td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$678.26</td> -->
												<td class="cell">
													<a class="btn btn-danger btn-sm" role="button" >Delete</a>
													<!-- <a class="btn-sm app-btn-secondary" href="#">delete</a> -->
													<div class="btn-group">
														<button type="button" class="btn app-btn-primary btn-sm dropdown-toggle"
															data-bs-toggle="dropdown" aria-expanded="false">
															User_Status
														</button>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="#">Admin</a></li>
															<li><a class="dropdown-item" href="#">user</a>
															</li>
														</ul>
													</div>
													
												</td>
											</tr>

										</tbody>
									</table>
								</div><!--//table-responsive-->

							</div><!--//app-card-body-->
						</div><!--//app-card-->

					</div><!--//tab-pane-->







				</div><!--//tab-content-->



			</div><!--//container-fluid-->
		</div><!--//app-content-->


	</div><!--//app-wrapper-->

    
@endsection