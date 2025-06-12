@extends('layouts.simonis.app')

@section('content')
    <div class="row">
							<div class="col-lg-6">
								<div class="card welcome-card overflow-hidden bg-primary-subtle border-0">
									<div class="card-body">
										<h4 class="position-relative fs-6"> Hey John, </h4>
										<h4 class="position-relative fs-6"> Download latest report </h4>
										<a href="javascript:void(0)" class="btn btn-primary mb-4 mt-3 position-relative">Download</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="card text-bg-primary">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between">
													<h4 class="mb-0 text-white card-title">Earnings</h4>
													<span class="btn round-48 fs-7 rounded-circle btn-secondary d-flex align-items-center justify-content-center">
														<i class="ti ti-currency-dollar"></i>
													</span>
												</div>
												<div class="mt-3">
													<h2 class="fs-8 text-white mb-0">$93,438.78</h2>
													<span class="text-white text-opacity-50">Monthly revenue</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card overflow-hidden">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between">
													<div>
														<h5 class="fw-normal mb-0 fs-4 text-muted"> Monthly Sales </h5>
														<h2 class="mb-0 fs-7">3246</h2>
													</div>
													<span class="btn round-48 fs-7 rounded-circle btn-warning d-flex align-items-center justify-content-center">
														<i class="ti ti-currency-dollar"></i>
													</span>
												</div>
											</div>
											<div id="monthly-sales"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<div class="d-md-flex align-items-center">
											<div>
												<h4 class="card-title">Sales Overview</h4>
												<p class="card-subtitle"> Ample admin Vs Pixel admin </p>
											</div>
											<div class="ms-auto">
												<ul class="list-unstyled mb-0">
													<li class="list-inline-item text-primary">
														<span class="round-8 text-bg-primary rounded-circle me-1 d-inline-block"></span> Ample
													</li>
													<li class="list-inline-item text-info">
														<span class="round-8 text-bg-info rounded-circle me-1 d-inline-block"></span> Pixel Admin
													</li>
												</ul>
											</div>
										</div>
										<div id="sales-overview" class="mt-4 mx-n6"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center pb-3 border-bottom">
											<div>
												<h4 class="card-title">Total Sales</h4>
												<p class="card-subtitle">Overview of Years</p>
											</div>
											<div class="ms-auto">
												<select class="form-select w-auto" aria-label="Default select example">
													<option value="1">March 2025</option>
													<option value="2">March 2025</option>
													<option value="3">March 2025</option>
												</select>
											</div>
										</div>
										<div class="d-flex align-items-center mt-4">
											<h5 class="text-muted fw-normal mb-0 fs-4"> Sales Yearly </h5>
											<div class="ms-auto">
												<h2 class="fw-bolder mb-0 fs-7">8,364,398</h2>
											</div>
										</div>
										<div class="position-relative">
											<div id="total-sales" class="mt-4 pt-2"></div>
											<i class="ti ti-shopping-cart total-sales-icon text-muted fs-10"></i>
										</div>
										<ul class="list-unstyled d-flex justify-content-between mb-2 mt-5">
											<li class="list-inline-item">
												<span class="round-8 text-bg-primary rounded-circle me-1 d-inline-block"></span> 2025
											</li>
											<li class="list-inline-item">
												<span class="round-8 text-bg-info rounded-circle me-1 d-inline-block"></span> 2024
											</li>
											<li class="list-inline-item">
												<span class="round-8 text-bg-warning rounded-circle me-1 d-inline-block"></span> 2023
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<div class="d-md-flex align-items-center">
											<div>
												<h4 class="card-title">Products Performance</h4>
												<p class="card-subtitle"> Ample Admin Vs Pixel Admin </p>
											</div>
											<div class="ms-auto mt-3 mt-md-0">
												<select class="form-select theme-select" aria-label="Default select example">
													<option value="1">March 2025</option>
													<option value="2">March 2025</option>
													<option value="3">March 2025</option>
												</select>
											</div>
										</div>
										<div class="table-responsive mt-4">
											<table class="table mb-0 text-nowrap varient-table align-middle fs-3">
												<thead>
													<tr>
														<th scope="col" class="px-0 text-muted"> Assigned </th>
														<th scope="col" class="px-0 text-muted">Name</th>
														<th scope="col" class="px-0 text-muted"> Priority </th>
														<th scope="col" class="px-0 text-muted text-end"> Budget </th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="px-0">
															<div class="d-flex align-items-center">
																<img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="35" alt="flexy" />
																<div class="ms-3">
																	<h6 class="mb-0 fw-bolder">Sunil Joshi</h6>
																	<span class="text-muted">Web Designer</span>
																</div>
															</div>
														</td>
														<td class="px-0">Elite Admin</td>
														<td class="px-0">
															<span class="badge bg-info">Low</span>
														</td>
														<td class="px-0 text-dark fw-medium text-end"> $3.9K </td>
													</tr>
													<tr>
														<td class="px-0">
															<div class="d-flex align-items-center">
																<img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="35" alt="flexy" />
																<div class="ms-3">
																	<h6 class="mb-0 fw-bolder"> Andrew McDownland </h6>
																	<span class="text-muted">Project Manager</span>
																</div>
															</div>
														</td>
														<td class="px-0">Real Homes WP Theme</td>
														<td class="px-0">
															<span class="badge text-bg-primary">Medium</span>
														</td>
														<td class="px-0 text-dark fw-medium text-end"> $24.5K </td>
													</tr>
													<tr>
														<td class="px-0">
															<div class="d-flex align-items-center">
																<img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="35" alt="flexy" />
																<div class="ms-3">
																	<h6 class="mb-0 fw-bolder"> Christopher Jamil </h6>
																	<span class="text-muted">SEO Manager</span>
																</div>
															</div>
														</td>
														<td class="px-0">MedicalPro WP Theme</td>
														<td class="px-0">
															<span class="badge bg-warning">Hight</span>
														</td>
														<td class="px-0 text-dark fw-medium text-end"> $12.8K </td>
													</tr>
													<tr>
														<td class="px-0">
															<div class="d-flex align-items-center">
																<img src="../assets/images/profile/user-7.jpg" class="rounded-circle" width="35" alt="flexy" />
																<div class="ms-3">
																	<h6 class="mb-0 fw-bolder">Nirav Joshi</h6>
																	<span class="text-muted">Frontend Engineer</span>
																</div>
															</div>
														</td>
														<td class="px-0">Hosting Press HTML</td>
														<td class="px-0">
															<span class="badge bg-danger">Low</span>
														</td>
														<td class="px-0 text-dark fw-medium text-end"> $2.4K </td>
													</tr>
													<tr>
														<td class="px-0">
															<div class="d-flex align-items-center">
																<img src="../assets/images/profile/user-8.jpg" class="rounded-circle" width="35" alt="flexy" />
																<div class="ms-3">
																	<h6 class="mb-0 fw-bolder">Micheal Doe</h6>
																	<span class="text-muted">Content Writer</span>
																</div>
															</div>
														</td>
														<td class="px-0">Helping Hands WP Theme</td>
														<td class="px-0">
															<span class="badge bg-success">Low</span>
														</td>
														<td class="px-0 text-dark fw-medium text-end"> $9.3K </td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<img src="../assets/images/backgrounds/blog-bg.jpg" class="card-img-top blog-img" alt="..." />
									<div class="card-body">
										<div class="d-flex align-items-center text-muted">
											<i class="ti ti-clock me-1 fs-6"></i> 22 March, 2025
										</div>
										<h4 class="card-title mt-4"> Super awesome, Angular 19 is coming soon! </h4>
										<ul class="list-unstyled mt-3 pt-1 mb-2 pb-4">
											<li class="list-inline-item">
												<span class="badge text-bg-primary">Medium</span>
											</li>
											<li class="list-inline-item">
												<span class="badge bg-danger">Low</span>
											</li>
										</ul>
										<div class="border-top pt-4 d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0)" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="John Deo">
													<img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" alt="flexy" />
												</a>
												<a href="javascript:void(0)" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Micheal Doe">
													<img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" alt="flexy" />
												</a>
												<a href="javascript:void(0)" class="me-1 round-md rounded-circle d-flex align-items-center justify-content-center bg-success-subtle round-40 text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new">
													<i class="ti ti-plus"></i>
												</a>
											</div>
											<a href="javascript:void(0)" class="text-muted">
												<i class="ti ti-message-circle fs-7"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="d-flex align-items-start">
											<div>
												<h4 class="card-title">Weekly Stats</h4>
												<p class="card-subtitle">Average sales</p>
											</div>
											<div class="ms-auto">
												<div class="dropdown">
													<a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="ti ti-dots fs-7"></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Action</a>
														</li>
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Another action</a>
														</li>
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Something else here</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="mt-5 pb-3 d-flex align-items-center">
											<span class="btn btn-primary rounded-circle round-48 hstack justify-content-center">
												<i class="ti ti-shopping-cart fs-6"></i>
											</span>
											<div class="ms-3">
												<h5 class="mb-0 fw-bolder fs-4">Top Sales</h5>
												<span class="text-muted fs-3">Johnathan Doe</span>
											</div>
											<div class="ms-auto">
												<span class="badge bg-secondary-subtle text-muted">+68%</span>
											</div>
										</div>
										<div class="py-3 d-flex align-items-center">
											<span class="btn btn-warning rounded-circle round-48 hstack justify-content-center">
												<i class="ti ti-star fs-6"></i>
											</span>
											<div class="ms-3">
												<h5 class="mb-0 fw-bolder fs-4">Best Seller</h5>
												<span class="text-muted fs-3">MaterialPro Admin</span>
											</div>
											<div class="ms-auto">
												<span class="badge bg-secondary-subtle text-muted">+68%</span>
											</div>
										</div>
										<div class="pt-3 mb-7 d-flex align-items-center">
											<span class="btn btn-success rounded-circle round-48 hstack justify-content-center">
												<i class="ti ti-message-dots fs-6"></i>
											</span>
											<div class="ms-3">
												<h5 class="mb-0 fw-bolder fs-4">Most Commented</h5>
												<span class="text-muted fs-3">Ample Admin</span>
											</div>
											<div class="ms-auto">
												<span class="badge bg-secondary-subtle text-muted">+68%</span>
											</div>
										</div>
									</div>
									<div id="weekly-stats"></div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-start">
											<div>
												<h4 class="card-title">Daily Activities</h4>
												<p class="card-subtitle">Overview of Years</p>
											</div>
											<div class="ms-auto">
												<div class="dropdown">
													<a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="ti ti-dots fs-7"></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Action</a>
														</li>
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Another action</a>
														</li>
														<li>
															<a class="dropdown-item" href="javascript:void(0)">Something else here</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<ul class="timeline-widget mb-0 position-relative mt-5 mb-n5">
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 09:30 </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
													<span class="timeline-badge-border d-block flex-shrink-0"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1"> Payment received from John Doe of $385.90 </div>
											</li>
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 10:00 am </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
													<span class="timeline-badge-border d-block flex-shrink-0"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold"> New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
												</div>
											</li>
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 12:00 am </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
													<span class="timeline-badge-border d-block flex-shrink-0"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1"> Payment was made of $64.95 to Michael </div>
											</li>
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 09:30 am </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
													<span class="timeline-badge-border d-block flex-shrink-0"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold"> New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
												</div>
											</li>
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 09:30 am </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
													<span class="timeline-badge-border d-block flex-shrink-0"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold"> New arrival recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
												</div>
											</li>
											<li class="timeline-item d-flex position-relative overflow-hidden">
												<div class="timeline-time text-dark flex-shrink-0 text-end"> 12:00 am </div>
												<div class="timeline-badge-wrap d-flex flex-column align-items-center">
													<span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
												</div>
												<div class="timeline-desc fs-3 text-dark mt-n1"> Payment Done </div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
@endsection

@push('page_styles')

@endpush

@push('breadcrumbs')
    {{ Breadcrumbs::render('Simonis | Home') }}
@endpush

@push('page_scripts')

@endpush

