function removeA(arr) {
    var what,
        a = arguments,
        L = a.length,
        ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
getcities = dataSearch.cities;
getcities_txt = "";
getstickings = [];
isBack = false;
var group_area = [];
var save_all_city_id = [];
var save_all_city_name = [];
var city_name = (sticking_name = pref_name = genre_name = url_search = "");
var prefix = $("#url_prefix").attr("data-url");
var home_route = $('input[name="home_route"]').val();
var search_head_sp = '';
var search_head_pc = '';

function remove_duplicates_safe(arr) {
    var seen = {};
    var ret_arr = [];
    for (var i = 0; i < arr.length; i++) {
        if (!(arr[i] in seen)) {
            ret_arr.push(arr[i]);
            seen[arr[i]] = true;
        }
    }
    return ret_arr;
}

function rmCitySame(getcities, index) {
    if (index == "allarea_1") {
        $("#allarea_1")
            .closest("ul.block__city-same")
            .find(".js-area")
            .each(function (index, element) {
                removeA(getcities, $(element).val());
            });
    } else {
        $("#allarea_0")
            .closest("ul.block__city-same")
            .find(".js-area")
            .each(function (index, element) {
                removeA(getcities, $(element).val());
            });
    }
}
$("body").on("change", ".js-area", function () {
    citydash = "";
    if ($(this).attr("data-id").indexOf("all") > -1) {
        if ($(this).is(":checked")) {
            rmCitySame(getcities, $(this).attr("id"));
            getcities.push($(this).val());
            $(this)
                .closest("ul.block__city-same")
                .find(".js-area")
                .each(function (index, element) {
                    if ($(element).attr("data-id").indexOf("all") != 0) {
                        // getcities.push($(element).val());
                    }
                });
        } else {
            rmCitySame(getcities, $(this).attr("id"));
        }
    } else {
        var getmothercheck = $(this)
            .closest(".block__city-same")
            .find(".check_all");
        if (
            typeof getmothercheck != undefined &&
            $(getmothercheck).is(":checked")
        ) {
            rmCitySame(getcities, $(this).attr("id"));
        }
        if ($(this).is(":checked")) {
            getcities.push($(this).val());
        } else {
            removeA(getcities, $(this).val());
        }
    }
    //to city dash
    if (getcities.length > 0) {
        //remove double
        getcities = remove_duplicates_safe(getcities);
        getcities.map(function (city, i) {
            if (i + 1 === getcities.length) {
                citydash += "city_" + city;
            } else {
                citydash += "city_" + city + "--";
            }
        });
        getcities_txt = citydash;
    } else {
        getcities_txt = "";
    }
});

$(document).ready(function () {
    $("#append_area").html('<div class="loader"></div>');
    $("body")
        .on("click", ".js-btnGenre", function (e) {
            e.preventDefault();
            //pc
            $(".titstep1 .genre_click").html(
                "全国の" + $(this).children("span").text() + "を探す"
            );
            //sp
            $(".search_head_sp .titstep2 .genre_click").html(
                "全国の" + $(this).children("span").text() + "を探す"
            );
            if (viewportW < 769) {
                $(".titstep").hide();
            }                        
        })
        .on("click", ".block__search--area .js-btnArea", function (e) {
            e.preventDefault();
            pref_name = "/" + $(this).attr("data-url");
            $(".search_head_pc .titstep").hide();
            if ($(".search_head_pc .titstep1 .genre_click").text() == "") {
                $(".search_head_pc .titstep2 .area_click").html(
                    "全国の不動産・住宅会社を探す"
                );
            } else {
                var genre_click = $(
                    ".search_head_pc .titstep1 .genre_click"
                ).text();
                $(".search_head_pc .titstep2 .area_click").html(
                    $(this).children("span").text() + "の"
                );
                $(".search_head_pc .titstep2 .genre_click").html(
                    genre_click.slice(3, -3) + "を探す"
                );
            }
            if ($(".search_head_pc .titstep2 .genre_click").text() == "") {
                $(".search_head_pc .titstep3 .area_click").html(
                    $(this).children("span").text() + "の不動産・住宅会社を探す"
                );
            } else {
                var genre_click = $(
                    ".search_head_pc .titstep2 .genre_click"
                ).text();
                $(".search_head_pc .titstep3 .area_click").html(
                    $(this).children("span").text() + "の"
                );
                $(".search_head_pc .titstep3 .genre_click").html(genre_click);
            }            
            url_search = prefix + genre_name + pref_name;            
        })
        //sp
        .on("click", ".block__area--btn .js-btnArea", function (e) {
            var genre_sp = $(".search_head_sp .titstep2 .genre_click").text();
            $(".search_head_sp .titstep3 .area_click").html(
                $(this).children("span").text() + "の"
            );
            $(".search_head_sp .titstep3 .genre_click").html(
                genre_sp.slice(3, -3) + "を探す"
            );            
        })
        .on("change", ".js-area", function () {
            if ($(this).attr("data-id").indexOf("all") > -1) {
                all_city_index = save_all_city_id.indexOf($(this).attr("id"));
                if (all_city_index < 0) {
                    save_all_city_id.push($(this).attr("id"));
                    save_all_city_name.push(
                        $(this).closest("li").children("label").html()
                    );
                } else {
                    save_all_city_name.splice(all_city_index, 1);
                    save_all_city_id.splice(all_city_index, 1);
                }
                if (!$(this).is(":checked")) {
                    $(this).prop("checked", false);
                } else {
                    $(
                        $(this)
                            .closest(".block__city-same")
                            .find("input")
                            .prop("checked", false)
                    );
                    $(this).prop("checked", true);
                }
            } else {
                save_all_city_name = [];
                save_all_city_id = [];
                $(
                    $(this)
                        .closest(".block__city-same")
                        .find(".check_all")
                        .prop("checked", false)
                );
            }           
            if (city_name.indexOf($(this).val()) > -1) {
                city_name = city_name.replace("--city_" + $(this).val(), "");
                city_name = city_name.replace("city_" + $(this).val(), "");
                city_name =
                    city_name.substring(0, 2) == "--"
                        ? city_name.replace("--", "")
                        : city_name;
            } else {
                city_name +=
                    city_name == ""
                        ? "city_" + $(this).val()
                        : "--" + "city_" + $(this).val();
            }
            //click to big city, remove area in this city
            var this_area = $(this).val();
            var first_i;
            if (group_area["group_" + this_area]) {
                $.each(group_area["group_" + this_area], function (k, v) {
                    if (city_name.indexOf(v)) {
                        city_name = city_name.replace("--city_" + v, "");
                        city_name = city_name.replace("city_" + v, "");
                    }
                });
            } else {
                var first_i = $(this)
                    .closest(".block__city--list")
                    .find("input:first")
                    .val();
                if (first_i == this_area && !$(this).is(":checked")) {
                    city_name = city_name.replace("--city_" + first_i, "");
                    city_name = city_name.replace("city_" + first_i, "");
                }
            }
            city_name =
                city_name.substring(0, 2) == "--"
                    ? city_name.slice(2)
                    : city_name;            
        })
        .on("click", ".js-sticking", function () {
            genre_name = "/" + $(this).attr("data-name");
            sticking_name = ""
            $(this).closest('.block__city--stick').next('form').show();
        })
        .on("click", ".setPrefHistory", function () {
            var pathname = window.location.pathname;
        })
        .on("click", ".setGenreHistory", function () {
            var pathname = window.location.pathname;            
        })
        .on("click", ".choose_sticking_point_his", function () {
            $("#city").hide();
            $(".block__search--headtxt").empty().append('<h2 class="titstep4">詳細条件</h2>');
        })
        .on("click", ".company_search, .btnafix", function (e) {
            // e.preventDefault();
            var checkedCities = $(".js-area:checkbox:checked")
                .map(function () {
                    return $(this).val();
                })
                .get();
        });
           
});


//action for getting url


$('body').on('click', '.js-btnArea', function(){
  var areaName = $(this).data('url');  
  if(areaName) {
    dataSearch.area = areaName;    
    gennerateUrl();
  }  
}).on("change", ".js-area", function () {
    console.log(getcities);
    dataSearch.cities = getcities;
    gennerateUrl();
}).on('click', '.js-sticking', function() {
    if(click_type == '1' || click_type == '2'){
        getstickings = [];
        if($(this).data('name') !== dataSearch.genre) {            
            dataSearch.stickings =  getstickings;
        }        
    }else {
        getstickings = [];
        dataSearch.stickings =  getstickings;
    }    
    var genreName = $(this).data('name');
    dataSearch.genre = genreName; 
    gennerateUrl();
}).on('click', '.sticking_poin_name', function(){
    getstickings = [];
    $(".sticking_poin_name").map(function() {
        if($(this).is(':checked')){
            getstickings.push(this.id);
        }
    });
    dataSearch.stickings =  getstickings;
    gennerateUrl();
}).on('click', '.js-btnGenre', function(){
    var clickedgen = $(this).data('name');
    dataSearch.genre = clickedgen;
});