import helpers from "../modules/helpers";
import { projectsDB as rawDB } from "../db/projects";


export function sortByDate(a, b) {
  return helpers.dateToNumber(b.date) - helpers.dateToNumber(a.date);
}

/* ------------------------------------- */

function uncompressProjectsDBtoJSON(db) {
  const result = {};
  db.forEach(entry => {

    const disabled = entry.disabled ? true : false;
    const children = entry.children || [];

    const tools = entry.tools;

    const clients = entry.clients;

    const types = entry.types;

    let links = [];
    if (entry.links?.length > 0) {
      links = entry.links.map(
        link => {
          const params = link.params?.length ? `?${link.params.join("&")}` : '';
          const url = link.url;

          return {
            "url": `${url}${params}`,
            "text": link.text,
            "self": link.self,
          }
        }
      );
    }

    const project = {
      "title": entry.title,
      "clients": clients,
      "date": entry.date,
      "turingDate": helpers.turingDate(entry.date),
      "types": types,
      "links": links,
      "disabled": disabled,
      "tools": tools,
      "children": children,
      "group": false,
      "location": false,
      "image": entry.image,
    };

    const id = helpers.getNewID(project.clients[0], project.date);
    
    result[id] = project;
  });

  return result;
}


/* ------------------------------------- */

export const projectsDBObj = uncompressProjectsDBtoJSON(rawDB);
export const projectsDBList = Object.values(projectsDBObj).sort(sortByDate);

export const allDBListVisible = Object.values(projectsDBObj).filter((item) => !item.disabled).sort(sortByDate);