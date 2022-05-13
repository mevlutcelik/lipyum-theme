<div class="col-lg-12">
    <form id="search-form" name="gs" method="submit" role="search" autocomplete="off" action="#">
        <div class="row">
            <div class="col-lg-4">
                <fieldset>
                    <label for="searchTitle" class="form-label">Hangi sektör?</label>
                    <input type="text" name="which-sector" class="form-control"
                           placeholder="Hizmet almak istediğiniz sektör" required>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset>
                    <label for="chooseCategory" class="form-label">Aylık müşteri sayısı</label>
                    <select name="Category" class="form-select" aria-label="Default select example"
                            id="chooseCategory" onChange="this.form.click()">
                        <option selected>Aylık kaç müşteri istiyorsun?</option>
                        <option type="checkbox" name="option1" value="0-100">0 - 100
                        </option>
                        <option value="100-500">100 - 500</option>
                        <option value="500-1000">500 - 1.000</option>
                        <option value="1000-2500">1.000 - 2.500</option>
                        <option value="2500-5000">2.500 - 5.000</option>
                        <option value="5000+">5.000+</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset>
                    <label for="chooseprice" class="form-label">Müşteri başına ne kadar ödeyeceksin?</label>
                    <select name="Price" class="form-select" aria-label="Default select example"
                            id="chooseCategory" onChange="this.form.click()">
                        <option selected>Müşteri başına ne kadar ödeyeceksin?</option>
                        <option value="$100 - $250">₺100 - ₺250</option>
                        <option value="$250 - $500">₺250 - ₺500</option>
                        <option value="$500 - $1000">₺500 - ₺1000</option>
                        <option value="$1000+">₺1000+</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" class="main-button">Gönder</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
