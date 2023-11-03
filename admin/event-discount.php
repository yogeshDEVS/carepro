<div class="tab-pane fade " id="pricing-tab-pane" role="tabpanel" aria-labelledby="pricing-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <div class="col">
                <h2>Pricing</h2>
            </div>
        </div>
    </div>
    <div class="tab-pane-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="discount-tab" data-bs-toggle="tab" data-bs-target="#discount-tab-pane" type="button" role="tab" aria-controls="discount-tab-pane" aria-selected="true">Discount</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="fee-tab" data-bs-toggle="tab" data-bs-target="#fee-tab-pane" type="button" role="tab" aria-controls="fee-tab-pane" aria-selected="false">Fee</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="discount-tab-pane" role="tabpanel" aria-labelledby="discount-tab" tabindex="0">
                <div class="d-flex justify-content-sm-end p-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDiscount">
                        New Discount <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                <table class="table bg-white" id="discountTable"
                    data-pagination="true"
                    data-page-size="25"
                    data-search="true"
                >
                    <thead  class="table-dark">
                        <tr>
                            <th data-field="DISCOUNTNAME" >Name</th>
                            <th data-field="DISCOUNTCODE" >Code</th>
                            <th data-field="AMOUNT" >Amount/Percentage</th>
                            <th data-field="DATEFROM" >Effective From</th>
                            <th data-field="DATETO" >Effective To</th>
                            <th data-field="USED" >Used</th>
                            <th data-field="STATUS" >Active</th>
                            <th data-field="ACTION" ></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="fee-tab-pane" role="tabpanel" aria-labelledby="fee-tab" tabindex="0">
                FEE
            </div>
        </div>
    </div>
   
</div>	

<!-- DISCOUNT -->
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasDiscount" aria-labelledby="offcanvasDiscount" >
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDiscount">Discount</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <fieldset>
            <div class="visually-hidden">
                <input class="object" name="id">
            </div>
            <div class="mb-3">
                <label for="discountname">Name*</label>
                <input type="text" class="form-control object required" id="discountname" name="discountname" placeholder="Discount name">
            </div>
            <div class="mb-3">
                <label for="discountcode">Code*</label>
                <input type="text" class="form-control object required" id="discountcode" name="discountcode" placeholder="Discount code">
            </div>
            <div class="mb-3">
                <label for="amount">Amount/Percentage*</label>
                <input type="text" class="form-control object required" id="amount" name="amount" placeholder="Discount value">
            </div>
            <div class="mb-3">
                <label for="fromto">Date*</label>
                <div class="input-group mb-3" id="range">
                    <input type="text" class="form-control object required" id="datefrom" name="datefrom" placeholder="Effective from">
                    <span class="input-group-text">To</span>
                    <input type="text" class="form-control object required" id="dateto" name="dateto" placeholder="Effective to">
                </div>

            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <select class="form-select object require" aria-label="Default select" name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
                                        
            
            <div class="action d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="save-data" data-parent="offcanvasDiscount" data-type="discount">
                    Save <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </fieldset>
    </div>
</div>