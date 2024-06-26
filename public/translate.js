// const translations = {
//     en: {
//         sett: "Settings",
//         dm: "Dark Mode:",
//         lng: "Language:",
//         qqq: 'Only user with role "Admin" can access this page.',
//         www: "Unauthorized Access",
//         eee: "Go back to homepage",
//         title: "Homepage",
//         title_demands: "Demands Stats",
//         title_total_demands: "Total Demands",
//         title_demands_not_done: "Demands not done",
//         title_demands_done: "Demands done",
//         title_ratio_demande: "Ratio demand",
//         title_breakdown: "Breakdown Stats",
//         title_total_breakdowns: "Total breakdowns",
//         title_wilaya: "Admins and Dots by Wilaya",
//         title_admins_wilaya: "Admins by Wilaya",
//         title_dots_wilaya: "Dots by Wilaya",
//         title_clients: "Client Stats",
//         title_total_clients: "Total clients:",
//         success: "Success message",
//         start_date_label: "Start Date:",
//         end_date_label: "End Date:",
//         filter_button: "Filter",
//         reset_button: "Reset",
//         th_id: "ID derang",
//         th_status: "Status derang",
//         th_type: "Type derang",
//         th_wilaya: "Wilaya",
//         th_address: "Adresse",
//         th_firstname: "Nom client",
//         th_lastname: "Prenom client",
//         th_mobile: "Mobile client",
//         th_phone: "Fixe client",
//         th_created_at: "Created at",
//         th_edit: "Edit",
//         th_delete: "Delete",
//         status_label: "Status derangement",
//         yes_button: "Yes",
//         edit_link: "Edit",
//         delete_button: "Delete",
//         downloadDetails : "Download Details",
//         edit_derangement_heading : "Edit Derangement",
//         status_derangement_label : "Status derangement",
//         update_derangement_button: "Update",


//     },
//     fr: {
//         sett: "Paramètres",
//         dm: "Mode sombre:",
//         lng: "Langue:",
//         qqq: 'Seul l\'utilisateur avec le rôle "Admin" peut accéder à cette page.',
//         www: "Accès non autorisé",
//         eee: "Retourner à la page d'accueil",
//         title: "Page d'accueil",
//         title_demands: "Statistiques des demandes",
//         title_total_demands: "Total des demandes",
//         title_demands_not_done: "Demandes non effectuées",
//         title_demands_done: "Demandes effectuées",
//         title_ratio_demande: "Ratio demande",
//         title_breakdown: "Statistiques de panne",
//         title_total_breakdowns: "Total des pannes",
//         title_wilaya: "Admins et points par Wilaya",
//         title_admins_wilaya: "Admins par Wilaya",
//         title_dots_wilaya: "Points par Wilaya",
//         title_clients: "Statistiques des clients",
//         title_total_clients: "Total clients :",
//         success: "Message de réussite",
//         start_date_label: "Date de début :",
//         end_date_label: "Date de fin :",
//         filter_button: "Filtrer",
//         reset_button: "Réinitialiser",
//         th_id: "ID dérang",
//         th_status: "Statut dérang",
//         th_type: "Type dérang",
//         th_wilaya: "Wilaya",
//         th_address: "Adresse",
//         th_firstname: "Nom du client",
//         th_lastname: "Prénom du client",
//         th_mobile: "Mobile du client",
//         th_phone: "Fixe du client",
//         th_created_at: "Créé à",
//         th_edit: "Éditer",
//         th_delete: "Supprimer",
//         status_label: "Statut du dérangement",
//         yes_button: "Oui",
//         edit_link: "Éditer",
//         delete_button: "Supprimer",
//          downloadDetails : "Telecharger Les Details",
//          edit_derangement_heading : "Editer Une Derangement",
//          status_derangement_label : "Statue de derangement",
//          update_derangement_button: "mettre a jour",
//     }
// };

// const setLanguage = (language) => {
//     for (const [key, value] of Object.entries(translations[language])) {
//         const element = document.getElementById(key);
//         if (element) {
//             element.innerText = value;
//         }
//     }
//     localStorage.setItem('language', language);
// };

// document.addEventListener("DOMContentLoaded", () => {
//     const languageSelect = document.querySelector("#languageToggle");
//     const savedLanguage = localStorage.getItem('language') || 'en' || 'fr';
//     languageSelect.value = savedLanguage;
//     setLanguage(savedLanguage);
    
//     languageSelect.addEventListener("change", (event) => {
//         setLanguage(event.target.value);
//     });
// });

const translations = {
    en: {
        sett: "Settings",
        dm: "Dark Mode:",
        lng: "Language:",
        qqq: 'Only user with role "Admin" can access this page.',
        www: "Unauthorized Access",
        eee: "Go back to homepage",
        title: "Homepage",
        title_demands: "Demands Stats",
        title_total_demands: "Total Demands",
        title_demands_not_done: "Demands not done",
        title_demands_done: "Demands done",
        title_ratio_demande: "Ratio demand",
        title_breakdown: "Breakdown Stats",
        title_total_breakdowns: "Total breakdowns",
        title_wilaya: "Admins and Dots by Wilaya",
        title_admins_wilaya: "Admins by Wilaya",
        title_dots_wilaya: "Dots by Wilaya",
        title_clients: "Client Stats",
        title_total_clients: "Total clients:",
        success: "Success message",
        start_date_label: "Start Date:",
        end_date_label: "End Date:",
        filter_button: "Filter",
        reset_button: "Reset",
        th_id: "ID derang",
        th_status: "Status derang",
        th_type: "Type derang",
        th_wilaya: "Wilaya",
        th_address: "Adresse",
        th_firstname: "Nom client",
        th_lastname: "Prenom client",
        th_mobile: "Mobile client",
        th_phone: "Fixe client",
        th_created_at: "Created at",
        th_edit: "Edit",
        th_delete: "Delete",
        status_label: "Status derangement",
        yes_button: "Yes",
        edit_link: "Edit",
        delete_button: "Delete",
        downloadDetails: "Download Details",
        edit_derangement_title: "Edit Derangement",
        edit_derangement_heading: "Edit Derangement",
        error_messages: "Error Messages",
        update_button: "Update derangement",
        close_button: "Close",
        modal_text: "Do you really want to edit this derangement?",
        cancel_button: "No",
        confirm_button: "Yes"
    },
    fr: {
        sett: "Paramètres",
        dm: "Mode sombre:",
        lng: "Langue:",
        qqq: 'Seul l\'utilisateur avec le rôle "Admin" peut accéder à cette page.',
        www: "Accès non autorisé",
        eee: "Retourner à la page d'accueil",
        title: "Page d'accueil",
        title_demands: "Statistiques des demandes",
        title_total_demands: "Total des demandes",
        title_demands_not_done: "Demandes non effectuées",
        title_demands_done: "Demandes effectuées",
        title_ratio_demande: "Ratio demande",
        title_breakdown: "Statistiques de panne",
        title_total_breakdowns: "Total des pannes",
        title_wilaya: "Admins et points par Wilaya",
        title_admins_wilaya: "Admins par Wilaya",
        title_dots_wilaya: "Points par Wilaya",
        title_clients: "Statistiques des clients",
        title_total_clients: "Total clients :",
        success: "Message de réussite",
        start_date_label: "Date de début :",
        end_date_label: "Date de fin :",
        filter_button: "Filtrer",
        reset_button: "Réinitialiser",
        th_id: "ID dérang",
        th_status: "Statut dérang",
        th_type: "Type dérang",
        th_wilaya: "Wilaya",
        th_address: "Adresse",
        th_firstname: "Nom du client",
        th_lastname: "Prénom du client",
        th_mobile: "Mobile du client",
        th_phone: "Fixe du client",
        th_created_at: "Créé à",
        th_edit: "Éditer",
        th_delete: "Supprimer",
        status_label: "Statut du dérangement",
        yes_button: "Oui",
        edit_link: "Éditer",
        delete_button: "Supprimer",
        downloadDetails: "Télécharger les détails",
        edit_derangement_title: "Modifier le dérangement",
        edit_derangement_heading: "Modifier le dérangement",
        error_messages: "Messages d'erreur",
        update_button: "Mettre à jour le dérangement",
        close_button: "Fermer",
        modal_text: "Voulez-vous vraiment modifier ce dérangement ?",
        cancel_button: "Non",
        confirm_button: "Oui"
    }
};

const setLanguage = (language) => {
    for (const [key, value] of Object.entries(translations[language])) {
        const element = document.getElementById(key);
        if (element) {
            element.innerText = value;
        }
    }
    localStorage.setItem('language', language);
};

document.addEventListener('DOMContentLoaded', () => {
    const language = localStorage.getItem('language') || 'en';
    document.getElementById('language-select').value = language;
    setLanguage(language);
});

document.getElementById('language-select').addEventListener('change', (event) => {
    setLanguage(event.target.value);
});


const savedLanguage = localStorage.getItem('language') || 'en';
setLanguage(savedLanguage);
