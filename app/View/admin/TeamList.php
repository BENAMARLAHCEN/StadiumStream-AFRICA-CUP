<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">TEAM LIST</h5>
                    <button id="addTeamBtn" class="btn btn-primary mb-3"><a class="text-decoration-none" href="Team/Add">Add Team</a></button>
                    <!-- <p>Add lightweight datatables to your project with using the <a
                  href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.
                Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a
                  href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team Name</th>
                                <th>Country</th>
                                <th>Coach</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            foreach ($data as $row) {?>
                            <tr>
                                <td><?=$row['TeamID']?></td>
                                <td><?=$row['TeamName']?></td>
                                <td><?=$row['Country']?></td>
                                <td><?=$row['coach']?></td>
                                <td><?=$row['detail']?></td>
                                <td>
                                    <a href="./Team/Edit/<?=$row['TeamID']?>" class="btn btn-info btn-sm edit-team">Edit</a>
                                    <a href="./Team/DeleteTeam/<?=$row['TeamID']?>" class="btn btn-danger btn-sm delete-team">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>