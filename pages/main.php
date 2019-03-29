<body>
    <div class="row container-fluid jumbotron">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="">
                <h2 class="text-center">
                    Student Results
                </h2>
            <hr>
                <form action="pages/result.php" method="post">
                    Roll: <input name="roll" type="text" placeholder="Type your roll number" class="form-control" required>

                    Registration: <input name="registration" type="text" placeholder="Type your Registration number" class="form-control">

                    Department: <select name="department" class="form-control">
                        <option value="" selected disabled>Select depertment</option>
                        <option value="Arcitecter">Arcitecter</option>
                        <option value="Automobile">Automobile</option>
                        <option value="Civil">Civil</option>
                        <option value="Computer">Computer</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Mechanical">Mechanical</option>
                    </select>

                    Semester: <select name="semester" class="form-control">
                        <option value="" selected disabled>Select Semester</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                    </select>
                  
                    Exam Year: <input name="year" type="number" min="2000" max="2019" step="1" value="2018" class="form-control">
                    <br>
                    <div class="text-right">
                        <input name="reset" type="reset" class="btn btn-outline-danger">
                        <input name="result_submit" type="submit" value="View Result" class="btn btn-outline-primary">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</body>