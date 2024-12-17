<div class="card">
    <div class="card-header">
     <p style=" text-align: center;  font-family: cursive; color: #a61717; font-weight:  bold; font-size: 20px;">   Status Monitor 
     </p>  </div>
    <div class="card-body">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Discipline</th>
            <th>Status</th>
            <th>Remarks</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stud as $student): ?>
            <tr>
                <td><?= $student->name ?></td>
                <td><?= $student->id ?></td>
                <td><?= $student->discipline ?></td>
                <td>
                <?php if ($student->status === 'Screened-out'): ?>
                    <input type="text" class="form-control" value="Screened-out" readonly>
                    <?php else: ?>
                    <select onchange="updateStatus(<?= $student->id ?>, this.value)" class="form-control" id="status-<?= $student->id ?>">
                        <option value="In-Progress" <?= $student->status == 'Screened-in' ? 'selected' : '' ?>>In-Progress</option>
                        <option value="Pending" <?= $student->status == 'Pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="Approved" <?= $student->status == 'Approved' ? 'selected' : '' ?>>Approved</option>
                        <option value="Reject" <?= $student->status == 'Reject' ? 'selected' : '' ?>>Reject</option>
                    </select>
                    <?php endif; ?>
                </td>
                <td><input type="text" class="form-control" id="remarks-<?= $student->id ?>" name="remarks" value="<?= $student->remarks ?>" <?= $student->status === 'Screened-out' ? 'readonly' : '' ?>></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        </div>
        <script>
            function updateStatus(studentId, status) {
        var remarks = document.getElementById('remarks-' + studentId).value;
        $.ajax({
            url: '<?= base_url("project/updateStatus") ?>',
            type: 'POST',
            data: { 
                id: studentId, 
                status: status,
                remarks: remarks
            },
            success: function(response) {
                var res = JSON.parse(response);
                if (res.success) {
                    alert('Status updated successfully');
                } else {
                    alert('Failed to update status');
                }
            },
            error: function() {
                alert('Failed to update status');
            }
        });
    }

        </script>
        </div>
