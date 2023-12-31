<div class="col-lg-12">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary text-uppercase"><?php echo $title?></h6>
        </div>
        
        <div class="card-body">
        <form method="post" action="<?php echo base_url().'Grade/insert'; ?>">
          <table class="table table-sm table-add table-borderless">
            <tr>
                <td class="w-25">ID Grade</td>
                
                <td><input class="form-control form-control-bot-border" required type="text" name="id" placeholder="Masukan ID Grade"></td>
            </tr>
            
            <tr>
                <td>Nomenklatur</td>
                
                <td><input class="form-control form-control-bot-border" required type="text" name="nomenklatur" placeholder="Masukkan Nomenklatur"></td>
            </tr>

            <tr>
                <td>Kompetensi</td>
                
                <td><input class="form-control form-control-bot-border" required type="text" name="kompetensi" placeholder="Masukkan Kompetensi"></td>
            </tr>

            <tr>
                <td>Work Experience </td>
                
                <td><input class="form-control form-control-bot-border" required type="number" name="WorkExp" placeholder="Masukkan Pengalaman Kerja"></td>
            </tr>

            <tr>
                <td>Minimal Salary</td>
                
                <td><input class="form-control form-control-bot-border" required type="number" name="MinSalary" placeholder="Masukkan Gaji Minimal"></td>
            </tr>

            <tr>
                <td>Middle Salary</td>
                
                <td><input class="form-control form-control-bot-border" required type="number" name="MidSalary" placeholder="Masukkan Gaji Menengah"></td>
            </tr>

            <tr>
                <td>Maximal Salary</td>
                
                <td><input class="form-control form-control-bot-border" required type="number" name="MaxSalary" placeholder="Masukkan Gaji Maksimal"></td>
            </tr>

            <tr>
                <td>Minimal Education</td>
                
                <td><select class="form-control form-control-bot-border" name="MinEdu">
                    <option value="SLTA">SLTA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </tr>

            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="simpan" value="Submit"></td>
            </tr>
             </table>
        </form>
    </div>
    </div>
</div>