<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content form__content">
                <button type="button" class="close form__close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-header">
                    <h3 class="modal-title form__title" id="myModalLabel">
                        Записаться на сеанс
                    </h3>
                    <p class="form__text">
                        Оставьте свои данные, и мы свяжемся с Вами для согласования даты и времени сеанса.
                    </p>
                </div>
                <div class="modal-body"> 
                    <form id="formSend" class="form">
                        <div class="formSend">
                            <label class="form__label">
                                <input class="form-control form__input" name="Имя" id="name" type="text" placeholder="Имя*" data-validate-field="name">
                            </label>
                            <label class="form__label">
                                <input class="form-control form__input" name="tel" id="tel" type="tel" placeholder="Телефон*" data-validate-field="tel" data-validate-rules="phone" inputmode="text">
                            </label>
                            <label class="form__label">
                                <input class="form-control form__input" name="email" id="email" type="email" placeholder="E-mail*" data-validate-field="mail">
                            </label> 
                            <label class="form__label">
                                <textarea class="form-control" id="text" cols="30" rows="5" placeholder="Сообщение"></textarea>
                            </label> 
                        </div>
                        
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default button form__button" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary button form__button" id="btn-send">Записаться</button>
                </div>
                <div id="error" class="error">
                </div>
            </div>
        </div>
</div>