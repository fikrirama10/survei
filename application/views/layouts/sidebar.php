<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
	<!--begin::Logo-->
	<div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
		<a href="index.html">
			<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo.png" class="h-40px" />
		</a>
	</div>
	<!--end::Logo-->
	<!--begin::Nav-->
	<div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
		<!--begin::Aside menu-->
		<div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-y scroll-lg-ms d-flex" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: trur}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
			<div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6 my-auto" data-kt-menu="true">
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
					<!--begin:Menu link-->
					<span class="menu-link menu-center">
						<span class="menu-icon me-0">
							<i class="ki-duotone ki-home-2 fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->

					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
					<!--begin:Menu link-->
					<span class="menu-link menu-center">
						<span class="menu-icon me-0">
							<i class="ki-duotone ki-notification-status fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
						</span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu content-->
							<div class="menu-content">
								<span class="menu-section fs-5 fw-bolder ps-1 py-1">User</span>
							</div>
							<!--end:Menu content-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Dosen</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?php echo base_url('dosen/dosen'); ?>">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">List Dosen</span>
									</a>
									<!--end:Menu link-->
								</div>

							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Mahasiswa</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?php echo base_url('mahasiswa/mahasiswa'); ?>">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">List Mahasiswa</span>
									</a>
									<!--end:Menu link-->
								</div>


							</div>
							<!--end:Menu sub-->
						</div>

					</div>
					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
					<!--begin:Menu link-->
					<span class="menu-link menu-center">
						<span class="menu-icon me-0">
							<i class="ki-duotone ki-abstract-35 fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu content-->
							<div class="menu-content">
								<span class="menu-section fs-5 fw-bolder ps-1 py-1">Survey</span>
							</div>
							<!--end:Menu content-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<a class="menu-link" href="<?php echo base_url('jadwal/jadwal'); ?>">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Jadwal Survey</span>

								</span>
							</a>
						</div>

					</div>
					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
					<!--begin:Menu link-->
					<span class="menu-link menu-center">
						<span class="menu-icon me-0">
							<i class="ki-duotone ki-abstract-26 fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu content-->
							<div class="menu-content">
								<span class="menu-section fs-5 fw-bolder ps-1 py-1">Apps</span>
							</div>
							<!--end:Menu content-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-rocket fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Projects</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/list.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">My Projects</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/project.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View Project</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/targets.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Targets</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/budget.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Budget</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/users.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Users</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/files.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Files</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/activity.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Activity</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/projects/settings.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Settings</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-handcart fs-2"></i>
								</span>
								<span class="menu-title">eCommerce</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Catalog</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/products.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Products</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/categories.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Categories</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Product</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Edit Product</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Category</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Edit Category</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Sales</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/sales/listing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Orders Listing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/sales/details.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Order Details</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/sales/add-order.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Order</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Edit Order</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Customers</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/customers/listing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Listing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/customers/details.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Details</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Reports</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/reports/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Products Viewed</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/reports/sales.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Sales</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/reports/returns.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Returns</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customer Orders</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/ecommerce/reports/shipping.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Shipping</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/ecommerce/settings.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Settings</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-phone fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Contacts</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/contacts/getting-started.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Getting Started</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/contacts/add-contact.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Add Contact</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/contacts/edit-contact.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Edit Contact</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/contacts/view-contact.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View Contact</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-chart fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Support Center</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/support-center/overview.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Overview</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Tickets</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/support-center/tickets/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tickets List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/support-center/tickets/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Ticket</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Tutorials</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/support-center/tutorials/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tutorials List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/support-center/tutorials/post.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tutorial Post</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/support-center/faq.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">FAQ</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/support-center/licenses.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Licenses</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/support-center/contact.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Contact Us</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-shield-tick fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">User Management</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Users</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/user-management/users/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/user-management/users/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View User</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Roles</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/user-management/roles/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Roles List</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/user-management/roles/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Role</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/user-management/permissions.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Permissions</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-briefcase fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Customers</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/customers/getting-started.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Getting Started</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/customers/list.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Customer Listing</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/customers/view.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Customer Details</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-map fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span>
								<span class="menu-title">Subscription</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/subscriptions/getting-started.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Getting Started</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/subscriptions/list.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Subscription List</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/subscriptions/add.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Add Subscription</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/subscriptions/view.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View Subscription</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-credit-cart fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Invoice Manager</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View Invoices</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/invoices/view/invoice-1.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Invoice 1</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/invoices/view/invoice-2.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Invoice 2</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/invoices/view/invoice-3.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Invoice 3</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/invoices/create.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Create Invoice</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-file-added fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">File Manager</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/file-manager/folders.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Folders</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/file-manager/files.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Files</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/file-manager/blank.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Blank Directory</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/file-manager/settings.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Settings</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-sms fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="menu-title">Inbox</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/inbox/listing.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Messages</span>
										<span class="menu-badge">
											<span class="badge badge-success">3</span>
										</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/inbox/compose.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Compose</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/inbox/reply.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View & Reply</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-message-text-2 fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span>
								<span class="menu-title">Chat</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/chat/private.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Private Chat</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/chat/group.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Group Chat</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="apps/chat/drawer.html">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Drawer Chat</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="apps/calendar.html">
								<span class="menu-icon">
									<i class="ki-duotone ki-calendar-8 fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
										<span class="path6"></span>
									</i>
								</span>
								<span class="menu-title">Calendar</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
					</div>
					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
					<!--begin:Menu link-->
					<span class="menu-link menu-center">
						<span class="menu-icon me-0">
							<i class="ki-duotone ki-briefcase fs-2x">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu content-->
							<div class="menu-content">
								<span class="menu-section fs-5 fw-bolder ps-1 py-1">Help</span>
							</div>
							<!--end:Menu content-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Components</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Documentation</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo9/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Layout Builder</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Changelog v8.2.6</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
					</div>
					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->
			</div>
		</div>
		<!--end::Aside menu-->
	</div>
	<!--end::Nav-->
	<!--begin::Footer-->
	<div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
		<!--begin::Menu-->
		<div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
			<button type="button" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
				<i class="ki-duotone ki-entrance-left fs-2x">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</button>
			<!--begin::Menu 2-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator mb-3 opacity-75"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Ticket</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Customer</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
					<!--begin::Menu item-->
					<a href="#" class="menu-link px-3">
						<span class="menu-title">New Group</span>
						<span class="menu-arrow"></span>
					</a>
					<!--end::Menu item-->
					<!--begin::Menu sub-->
					<div class="menu-sub menu-sub-dropdown w-175px py-4">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Admin Group</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Staff Group</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3">Member Group</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu sub-->
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">New Contact</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator mt-3 opacity-75"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content px-3 py-3">
						<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
					</div>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::Menu 2-->
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Footer-->
</div>