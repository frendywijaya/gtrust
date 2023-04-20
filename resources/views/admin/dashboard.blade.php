@extends('admin.layout.master')

@section('content')

				<!-- Page header -->
				<div class="page-header page-header-light shadow">
					<div class="page-header-content d-lg-flex">
						<div class="d-flex">
							<h4 class="page-title mb-0">
								Home - <span class="fw-normal">Dashboard</span>
							</h4>

							<a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>
					</div>

					<div class="page-header-content d-lg-flex border-top">
						<div class="d-flex">
							<div class="breadcrumb py-2">
								<a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
								<a href="#" class="breadcrumb-item">Home</a>
								<span class="breadcrumb-item active">Dashboard</span>
							</div>

							<a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
								<i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-xl-7">

							<!-- Traffic sources -->
							{{-- <div class="card">
								<div class="card-header d-flex align-items-center">
									<h5 class="mb-0">Data Summary</h5>
								</div>

								<div class="card-body pb-0">
									<div class="row">
										<div class="col-sm-6">
											<div class="d-flex ms-5 mb-2">
												<a href="/quote" class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3">
													<i class="ph-file-text"></i>
												</a>
												<div>
                                                    <a href="{{ route('quote.index') }}">
													<div class="fw-semibold">Quote Dibuat</div>
													<span class="text-muted">{{ $quote }}</span>
                                                    </a>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="new-visitors"></div>
										</div>

										<div class="col-sm-6">
											<div class="d-flex align-items-center justify-content-center mb-2">
												<a href="/invoice" class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3">
													<i class="ph-file-lock"></i>
												</a>
												<div>
                                                    <a href="{{ route('invoice.index') }}">
													<div class="fw-semibold">Invoice Dibuat</div>
													<span class="text-muted">{{ $invoice }}</span>
                                                    </a>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="new-sessions"></div>
										</div>
									</div>
									<div class="row mt-3 mb-2">
										<div class="col-sm-6">
											<div class="d-flex ms-5 mb-2">
												<a href="/customer" class="bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
													<i class="ph-users-three"></i>
												</a>
												<div><a href="{{ route('customer.index') }}">
													<div class="fw-semibold">Customer</div>
													<span class="text-muted">{{ $customer }}</span>
                                                    </a>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="total-online"></div>
										</div>

										<div class="col-sm-6">
											<div class="d-flex align-items-center justify-content-center mb-2">
												<a href="/produk" class="bg-primary bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
													<i class="ph-package"></i>
												</a>
												<div><a href="{{ route('produk.index') }}">
													<div class="fw-semibold">Jumlah Produk</div>
													<span class="text-muted">{{ $product }}</span>
                                                    </a>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="total-online"></div>
										</div>
									</div>
								</div>

								<div class="chart position-relative" id="traffic-sources"></div>
							</div> --}}
							<!-- /traffic sources -->

						</div>

					</div>
					<!-- /main charts -->

				</div>
				<!-- /content area -->


@endsection
