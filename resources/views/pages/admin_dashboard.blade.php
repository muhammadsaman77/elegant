@extends('layouts.admin_main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2    ">
                <div class="flex-shrink-0 p-3" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                      <svg class="bi pe-none me-2" width="30" height="24" aria-hidden="true"><use xlink:href="#bootstrap"/></svg>
                      <span class="fs-5 fw-semibold">Collapsible</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                          Home
                        </button>
                        <div class="collapse show" id="home-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                          Dashboard
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                          Orders
                        </button>
                        <div class="collapse" id="orders-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="border-top my-3"></li>
                      <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                          Account
                        </button>
                        <div class="collapse" id="account-collapse">
                          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat Datang, Admin!</h1>
                        <h6>Booking Terbaru</h6>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Tanggal Booking</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">#B001</th>
                                <td>John Doe</td>
                                <td>Main Hall</td>
                                <td>27 April 2025</td>
                                <td>
                                    <span class="badge text-bg-success">Confirmed</span>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">#B002</th>
                                <td>Jane Smith</td>
                                <td>Garden Terrace</td>
                                <td>28 April 2025</td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">#B003</th>
                                <td>Albert N</td>
                                <td>Small Meeting Room</td>
                                <td>29 April 2025</td>
                                <td>
                                    <span class="badge text-bg-danger">Cancelled</span>
                                </td>
                              </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-4">
                        <div>
                            <h5 class="mb-4">User Baru</h5>
                            <div>
                                <p>Andi Wijaya - andi@mail.com</p>
                                <p>Sinta Dewi - sinta@mail.com</p>
                                <p>Budi Santoso - budi@mail.com</p>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-4">Notifikasi & Verifikasi</h5>
                            <div>
                                <p>🔔 <span class="fw-bold">Notifikasi:</span> Ada 3 booking perlu dikonfirmasi</p>
                                <p>✔️ <span class="fw-bold">Verifikasi:</span> 2 venue baru menunggu approval</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
