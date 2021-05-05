function penerimaanDateLapAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cariPenerimaanAwal")[0].setAttribute('max', nextWeekDate)
}

function penerimaanDateLapAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cariPenerimaanAkhir")[0].setAttribute('max', nextWeekDate)
}

function penerimaanDateCetakAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakPenerimaanAwal")[0].setAttribute('max', nextWeekDate)
}

function penerimaanDateCetakAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakPenerimaanAkhir")[0].setAttribute('max', nextWeekDate)
}

function penyaluranDateCariAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("penyaluranCariAwal")[0].setAttribute('max', nextWeekDate)
}

function penyaluranDateCariAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("penyaluranCariAkhir")[0].setAttribute('max', nextWeekDate)
}

function penyaluranDateCetakAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("penyaluranCetakAwal")[0].setAttribute('max', nextWeekDate)
}

function penyaluranDateCetakAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("penyaluranCetakAkhir")[0].setAttribute('max', nextWeekDate)
}

function requestCariDateAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("reqCariAwal")[0].setAttribute('max', nextWeekDate)
}

function requestCariDateAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("reqCariAkhir")[0].setAttribute('max', nextWeekDate)
}

function requestCetakDateAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("reqCetakAwal")[0].setAttribute('max', nextWeekDate)
}

function requestCetakDateAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("reqCetakAkhir")[0].setAttribute('max', nextWeekDate)
}

function penyaluranDate() {
    var today = new Date().toISOString().split('T')[0];
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("tgl_penyaluran")[0].setAttribute('min', today);
    document.getElementsByName("tgl_penyaluran")[0].setAttribute('max', nextWeekDate)
}

function cetakPrintPenerimaanAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakTotalDonasiAwal")[0].setAttribute('max', nextWeekDate)
}

function cetakPrintPenerimaanAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakTotalDonasiAkhir")[0].setAttribute('max', nextWeekDate)
}

function cetakPrintPenyaluranAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakTotalPenyaluranAwal")[0].setAttribute('max', nextWeekDate)
}

function cetakPrintPenyaluranAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakTotalPenyaluranAkhir")[0].setAttribute('max', nextWeekDate)
}

function cetakLapAdjustmentAwal() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakAdjustmentAwal")[0].setAttribute('max', nextWeekDate)
}

function cetakLapAdjustmentAkhir() {
    var nextWeekDate = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
    document.getElementsByName("cetakAdjustmentAkhir")[0].setAttribute('max', nextWeekDate)
}
