<form method="post" class="form-horizontal" action="index.php?controller=add_edit_kaiwas&act=edit">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius:3px;">
                <div class="modal-header" style="background: #428bca; color: #fff; ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sửa tiêu đề hội thoại</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Trạng thái</label>
                        <div class="col-sm-3">
                            <select name="ed_status" id="status" class="form-control input-sm">
                                <option value="1" id="showK">Hiển thị</option>
                                <option value="2" id="hiddenK">Tạm ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="m_title1" class="col-sm-3 control-label">Tiêu đề (kana)</label>
                        <div class="col-sm-9">
                            <input type="text" name="ed_title1" id="m_title1" class="form-control input-sm" placeholder="はじめまして">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="m_title2" class="col-sm-3 control-label">Tiêu đề (romaji)</label>
                        <div class="col-sm-9">
                            <input type="text" name="ed_title2" id="m_title2" class="form-control input-sm" placeholder="hajimemashite">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="m_title3" class="col-sm-3 control-label">Tiêu đề (tiếng việt)</label>
                        <div class="col-sm-9">
                            <input type="text" name="ed_title3" id="m_title3" class="form-control input-sm" placeholder="Rất vui được làm quen với bạn.">
                        </div>
                    </div>
                    <input type="hidden" name="ed_lessonId"  value="<?= $lessId;?>">
                    <input type="hidden" id="kid" name="kid">
                </div>
                <div class="modal-footer" style="margin-top:-5px;">
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-remove"></i>
                        <span style="margin-left:1px;">Nhập lại</span>
                    </button>
                    <button type="submit" class="btn btn-primary" name="ed_Kaiwa">
                        <i class="glyphicon glyphicon-ok"></i>
                        <span style="margin-left:1px;">Lưu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>