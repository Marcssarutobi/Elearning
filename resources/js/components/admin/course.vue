<template>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Your Course</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="iq-search-bar device-search">
                                    <form action="#" class="searchbox">
                                        <a class="search-link" href="#"><i class="fa-regular fa-search"></i></a>
                                        <input type="text" class="text search-input" placeholder="Search here...">
                                    </form>
                                </div>
                                <div class="pl-3 border-left btn-new">
                                    <a href="#" class="btn btn-primary" data-target="#new-project-modal" data-toggle="modal">New Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-3">
                        <table class="table table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>Course title</th>
                                    <th>Instructor</th>
                                    <th>Session Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Title 1</th>
                                    <td>Instructor 1</td>
                                    <td>11</td>
                                    <td>
                                        <button class="btn btn-info me-3"><i class="fa-regular fa-pen"></i></button>
                                        <button class="btn btn-danger"><i class="fa-regular fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title 2</th>
                                    <td>Instructor 2</td>
                                    <td>21</td>
                                    <td>
                                        <button class="btn btn-info me-3"><i class="fa-regular fa-pen"></i></button>
                                        <button class="btn btn-danger"><i class="fa-regular fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title 3</th>
                                    <td>Instructor 3</td>
                                    <td>31</td>
                                    <td>
                                        <button class="btn btn-info me-3"><i class="fa-regular fa-pen"></i></button>
                                        <button class="btn btn-danger"><i class="fa-regular fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-item-center justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import "../../../../public/admin/css/backend.css?v=1.0.0"
import "../../../../public/admin/css/backend-plugin.min.css"
export default {
    
}
</script>
<style scoped>
    .page-item.active .page-link{
        background-color: #ff7029 !important;
        border-color: #ff7029 !important;
    }
</style>