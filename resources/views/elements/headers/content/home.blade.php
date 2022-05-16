<div class="col-lg-12">
    <form id="search-form" name="gs" method="submit" role="search" autocomplete="off" action="#">
        <div class="row">
            <div class="col-lg-4">
                <fieldset>
                    <label for="which-service" class="form-label">Hangi sektör?</label>
                    <input type="text" name="which-service" id="which-service" class="form-control"
                           placeholder="Hizmet almak istediğin sektör" required>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset>
                    <label for="customers-per-month" class="form-label">Aylık müşteri sayısı</label>
                    <select name="customers-per-month" class="form-select" aria-label="Aylık kaç müşteri istiyorsun?"
                            id="customers-per-month" onChange="this.form.click()">
                        <option selected>Aylık kaç müşteri istiyorsun?</option>
                        <option value="0-100">0 - 100
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
                    <label for="how-much-customer" class="form-label">Müşteri başına ne kadar ödeyeceksin?</label>
                    <div class="input-group">
                        <label for="how-much-customer" class="input-group-text"
                              style="border-radius:7.5px 0 0 7.5px;width: 44px;height: 44px;display: flex;align-items: center;justify-content: center;background-color: #7c47bf;border-color: #7c47bf">
                            <svg style="width: 14px;height: 14px;" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24"><path
                                    d="M17 13c-.518 3.571-2.976 7.609-8 8v-11l7-2v-2l-7 2v-2l7-2v-2l-7 2v-4h-4v5.143l-3 .857v2l3-.857v2l-3 .857v2l3-.857v12.857h.621c4.744 0 7.872-.245 11.016-3.582 1.835-1.948 3.057-4.646 3.363-7.418h-3z"/></svg>
                        </label>
                        <input name="how-much-customer" id="how-much-customer" style="width: calc(100% - 44px);border-top-left-radius: 0;border-bottom-left-radius: 0;border-left-color: #7c47bf;" id="how-much-per-customer"
                            type="number" class="form-control" placeholder="Müşteri başına ne kadar ödeyeceksin?"
                            aria-label="Müşteri başına ne kadar ödeyeceksin?" aria-describedby="how-much-customer">
                    </div>
                </fieldset>
            </div>
            <div id="form-add-el" style="display: none;">
                <div class="row">
                    <div class="col-lg-4">
                        <fieldset>
                            <label for="name-and-surname" class="form-label">Adın ve Soyadın<sup>*</sup></label>
                            <input type="text" id="name-and-surname" name="name-and-surname" class="form-control" placeholder="Adın ve Soyadın"
                                   required>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset>
                            <label for="phone" class="form-label">Telefon Numaran<sup>*</sup></label>
                            <input type="text" id="phone" name="phone" pattern="[0-9]{10}" class="form-control"
                                   placeholder="Telefon Örn: 5123456789">
                        </fieldset>
                    </div>
                    <button type="submit" id="sumbit-form-button" style="display: none;height: 44px;width: calc((100% / 3) - 1.5rem);margin: 46px 0.75rem;" class="main-button">Gönder</button>
                </div>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <a title="Devam et" style="width: 100%;" id="go-form" class="main-button" href="#!">Devam et</a>
                </fieldset>
            </div>
        </div>
    </form>
</div>
<script>

    document.querySelector('#go-form').addEventListener('click', function () {
        document.querySelector('#form-add-el').style.display = 'block';
        document.querySelector('#sumbit-form-button').style.display = 'block';
        document.querySelector('#go-form').style.display = 'none';
    });
</script>
