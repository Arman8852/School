var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "600", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    state_description: "",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
    //Location defaults
    location_description: "বিবরণ",
    location_url: "",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
    //Zoom settings
    zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    BGD1806: {
      name: "<p style='padding-left:100px'>ঢাকা বিভাগ</p>",
      url: "/profile/division/ঢাকা",
      color: "#2ecc71",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD2432: {
      name: "<p style='padding-left:100px'>খুলনা বিভাগ</p>",
      url: "/profile/division/খুলনা",
      color: "#e67e22",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD2475: {
      name: "<p style='padding-left:100px'>বরিশাল বিভাগ</p>",
      url: "/profile/division/বরিশাল",
      color: "#1abc9c",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD2476: {
      name: "<p style='padding-left:100px'>চট্টগ্রাম বিভাগ</p>",
      url: "/profile/division/চট্টগ্রাম",
      color: "#2980b9",
      hover_color: "#34495e",
      description:"উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD2488: {
      name: "<p style='padding-left:100px'>সিলেট বিভাগ</p>",
      url: "/profile/division/সিলেট",
      color: "#3498db",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD3255: {
      name: "<p style='padding-left:100px'>রাজশাহী বিভাগ</p>",
      url: "/profile/division/রাজশাহী",
      color: "#f1c40f",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    },
    BGD5492: {
      name: "<p style='padding-left:100px'>রংপুর বিভাগ</p>",
      url: "/profile/division/রংপুর",
      color: "#f39c12",
      hover_color: "#34495e",
      description: "উল্লেখযোগ্য মাদ্রাসাঃ <b>হাটহাজারী মাদ্রাসা, বাবুনগর মাদ্রাসা, ইত্যাদি।</b>"
    }
  },
  locations: {
    /*"0": {
      lat: "23.723056",
      lng: "90.408611",
      color: "#f1c40f",
      name: "ঢাকা",
      description: "বাংলাদেশের রাজধানী"
    },*/
      "0": {
      lat: "22.51",
      lng: "91.81",
      color: "black",
      name: "<p style='padding-left:40px'>হাটহাজারী মাদ্রাসা</p>",
      url: "/madrashaprofile/1",
      description: "বাংলাদেশের সর্ব বৃহৎ কওমী মাদ্রাসা "
    },
      "1": {
      lat: "22.76",
      lng: "91.74",
      color: "black",
      name: "বাবুনগর মাদ্রাসা",
      url: "/madrashaprofile/2",
      description: "বাংলাদেশের সর্ব বৃহৎ কওমী মাদ্রাসা "
    },

    "2": {
      lat: "23.9720783",
      lng: "91.1102045",
      color: "black",
      name: "জামিয়া ইসলামিয়া ইউনুসিয়া, ব্রাহ্মণবাড়িয়া",
      url: "/madrashaprofile/5",
      description: "বাংলাদেশের কওমী মাদ্রাসা "
    }
  },
  labels: {},
  legend: {
    entries: []
  },
  regions: {}
};