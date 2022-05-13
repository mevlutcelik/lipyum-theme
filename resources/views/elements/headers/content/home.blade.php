<div class="col-lg-12">
    <form id="search-form" name="gs" method="submit" role="search" autocomplete="off" action="#">
        <div class="row">
            <div class="col-lg-3">
                <fieldset>
                    <label for="searchTitle" class="form-label">Hangi sektör?</label>
                    <input type="text" name="which-sector" class="searchText"
                           placeholder="Hizmet almak istediğiniz sektör..." required>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset>
                    <label for="chooseCategory" class="form-label">Müşteri sayısı</label>
                    <select name="Category" class="form-select" aria-label="Default select example"
                            id="chooseCategory" onChange="this.form.click()">
                        <option selected>Aylık kaç müşteri istiyorsun?</option>
                        <option type="checkbox" name="option1" value="Interior Design">0 - 1000
                        </option>
                        <option value="Exterior Design">Exterior Design</option>
                        <option value="New Ideas">New Ideas</option>
                        <option value="Trendy Design">Trendy Design</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset>
                    <label for="chooseprice" class="form-label">Price Range</label>
                    <select name="Price" class="form-select" aria-label="Default select example"
                            id="chooseCategory" onChange="this.form.click()">
                        <option selected>Choose price</option>
                        <option value="$100 - $250">$100 - $250</option>
                        <option value="$250 - $500">$250 - $500</option>
                        <option value="$500 - $1000">$500 - $1000</option>
                        <option value="$1000+">$1000+</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset>
                    <label for="chooseplan" class="form-label">Pick a Plan</label>
                    <select name="Plan" class="form-select" aria-label="Default select example"
                            id="chooseCategory" onChange="this.form.click()">
                        <option selected>Choose plan</option>
                        <option value="Standard">Standard</option>
                        <option value="Professional">Professional</option>
                        <option value="Golden">Golden</option>
                        <option value="Premium">Premium</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button class="main-button">Search Now</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
